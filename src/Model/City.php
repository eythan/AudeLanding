<?php
namespace App\Model;

use App\Core\Model;
use PDO;

class City extends Model
{
    protected string $table = 'aude_cities';

    public function findBySlug(string $slug)
    {
        $stmt = $this->db->prepare("SELECT * FROM {$this->table} WHERE slug = ?");
        $stmt->execute([$slug]);

        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function updateByID(array $data): bool
    {
        $sql = "UPDATE {$this->table} 
            SET 
                slug         = :slug,
                display_name = :display_name, 
                zip_code     = :zip_code, 
                description  = :description, 
                image        = :image 
            WHERE id = :id";

        $stmt = $this->db->prepare($sql);

        return $stmt->execute([
            'slug'         => $data['slug'],
            'display_name' => $data['display_name'],
            'zip_code'     => $data['zip_code'],
            'description'  => $data['description'],
            'image'        => $data['image'],
            'id'           => $data['id']
        ]);
    }
}