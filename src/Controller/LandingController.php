<?php
namespace App\Controller;

use App\Core\Controller;
use App\Model\City;

class LandingController extends Controller
{

    public function index()
    {
        $slug = $_GET['ville'] ?? null;

        if (!$slug) {
            header("Location: /");
            exit;
        }

        $cityModel = new City();

        $cityData = $cityModel->findBySlug($slug);

        if (!$cityData) {
            header("Location: /");
            exit;
        }

        $this->render('landing/index', [
            'title' => 'Accueil',
            'city'  => $cityData
        ]);
    }
}