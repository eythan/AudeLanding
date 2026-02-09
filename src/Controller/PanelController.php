<?php
namespace App\Controller;

use App\Core\Controller;
use App\Model\City;

class PanelController extends Controller
{
    private function simplifierTexteSlug($text) {
        $text = transliterator_transliterate('Any-Latin; Latin-ASCII', $text);
        $text = str_replace([' ', "'"], '-', $text);
        return strtolower($text);
    }

    private function simplifierTexteImage($text) {
        $text = transliterator_transliterate('Any-Latin; Latin-ASCII', $text);
        $text = str_replace(' ', '-', $text);
        $text = str_replace("'", "", $text);
        $text = preg_replace('/-+/', '-', $text);
        return strtolower(trim($text, '-'));
    }

    public function index()
    {
        $slug = $_GET['ville'] ?? null;

        if (!$slug) {
            $this->render('panel/index', [
                'title' => 'Landing',
            ]);
            exit;
        }

        $cityModel = new City();

        $cityData = $cityModel->findBySlug($slug);

        if (!$cityData) {
            $this->render('panel/index', [
                'title' => 'Landing',
            ]);
            exit;
        }

        $this->render('panel/index', [
            'title' => 'Landing',
            'city'  => $cityData
        ]);
    }

    public function add()
    {
        if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
            header('Location: /');
            exit;
        }

        $cityModel = new City();

        $id = $_POST['id'] ?? null;
        $display_name = $_POST['display_name'];
        $zip_code = $_POST['zip_code'];
        $description = $_POST['description'];

        $slug = $this->simplifierTexteSlug($display_name);
        $image = $this->simplifierTexteImage($display_name) . '.jpg';

        if (!empty($_FILES['image']['name'])) {
            $destination = $_SERVER['DOCUMENT_ROOT'] . '/assets/images/cities/' . $image;

            move_uploaded_file($_FILES['image']['tmp_name'], $destination);
        }

        $data = [
            'id' => $id,
            'slug' => $slug,
            'display_name' => $display_name,
            'zip_code'     => $zip_code,
            'description'     => $description,
            'image'     => $image,
        ];

        if ($id) {
            $cityModel->updateByID($data);
        }

        var_dump($data);
        die;
    }
}