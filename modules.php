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


    //tao moi mot mon hoc
    public static function create(Module $module): bool {
        $conn = connectDatabase();  
        $stmt = mysqli_prepare($conn, "INSERT INTO tbmodule (name, hours, fee) VALUES (?, ?, ?)");
        if (!$stmt) {
            throw new \Exception("Error preparing statement: " . mysqli_error($conn));
        }
        mysqli_stmt_bind_param($stmt, "sii", $module->name, $module->hours, $module->fee);
        $result = mysqli_stmt_execute($stmt);
        if (!$result) { 
            throw new \Exception("Error executing statement: " . mysqli_stmt_error($stmt));
        }
        mysqli_stmt_close($stmt);
        mysqli_close($conn);
        return $result;
    }


    //xoa mot mon hoc theo ID
    public static function delete(int $id): bool {
        $conn = connectDatabase();
        $stmt = mysqli_prepare($conn, "DELETE FROM tbmodule WHERE id = ?");
        if (!$stmt) {
            throw new \Exception("Error preparing statement: " . mysqli_error($conn));
        }
        mysqli_stmt_bind_param($stmt, "i", $id);
        $result = mysqli_stmt_execute($stmt);
        if (!$result) {
            throw new \Exception("Error executing statement: " . mysqli_stmt_error($stmt));
        }   
        mysqli_stmt_close($stmt);
        mysqli_close($conn);
        return $result;
    }

    //cap nhat mot mon hoc
    public static function update(Module $module): bool {
        $conn = connectDatabase();
        $stmt = mysqli_prepare($conn, "UPDATE tbmodule SET name = ?, hours = ?, fee = ? WHERE id = ?");
        if (!$stmt) {
            throw new \Exception("Error preparing statement: " . mysqli_error($conn));
        }
        mysqli_stmt_bind_param($stmt, "siii", $module->name, $module->hours, $module->fee, $module->id);
        $result = mysqli_stmt_execute($stmt);
        if (!$result) {
            throw new \Exception("Error executing statement: " . mysqli_stmt_error($stmt));
        }
        mysqli_stmt_close($stmt);
        mysqli_close($conn);
        return $result;
    }
    public static function getById(int $id): ?Module {
        $conn = connectDatabase();
        $stmt = mysqli_prepare($conn, "SELECT * FROM tbmodule WHERE id = ?");   
        if (!$stmt) {
            throw new \Exception("Error preparing statement: " . mysqli_error($conn));
        }
        mysqli_stmt_bind_param($stmt, "i", $id);
        mysqli_stmt_execute($stmt);

        $result = mysqli_stmt_get_result($stmt);
        if ($result && mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);
            mysqli_free_result($result);
            mysqli_stmt_close($stmt);
            mysqli_close($conn);
            return new Module(
                id: (int)$row['id'],
                name: $row['name'], 
                hours: (int)$row['hours'],
                fee: (int)$row['fee']
            );
        }   
        mysqli_stmt_close($stmt);
        mysqli_close($conn);
        return null;

    }


}

