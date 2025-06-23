<?php
//Quan ly danh sach cac mon hoc trong bang `tbmodule`
declare(strict_types=1);

namespace App\Models;

class Module {
    public function __construct(
        public int $id = 0, 
        public ?string $name = null,    
        public int $hours = 40,
        public int $fee = 100) {
    }

    public function __toString(): string {
        return "Mon hoc [ID: {$this->id}, Ten: {$this->name}, Gio: {$this->hours}, hoc phi: {$this->fee}]";
    }
}

require_once 'library.php';
class ModuleDao {

    //lay danh sach cac mon hoc
    public static function getAll(): array {
        $conn = connectDatabase(); 

        $sql = "SELECT * FROM tbmodule";
        $result = mysqli_query($conn, $sql);
        $modules = [];
        if ($result) {
            while ($row = mysqli_fetch_assoc($result)) {
                $modules[] = new Module(
                    id: (int)$row['id'],
                    name: $row['name'], 
                    hours: (int)$row['hours'],
                    fee: (int)$row['fee']
                );
            }
            mysqli_free_result($result);
        } else {
            throw new \Exception("Error executing query: " . mysqli_error($conn));
        }
        mysqli_close($conn);
        return $modules;
    }


}