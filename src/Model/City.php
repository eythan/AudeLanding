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
}