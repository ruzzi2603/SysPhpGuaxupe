<?php
namespace App\Models;
use CodeIgniter\Model;

class Conteudomodel extends Model {
    protected $table = 'conteudo';
    protected $primaryKey = 'ID_Conteudo';
    
    // Campos editáveis
    protected $allowedFields = ['Titulo','Texto_curto','Texto_completo','Imagem'];

    // Método para apresentar o conteúdo
    public function getConteudo() {
        return $this->findAll();
    }
}
?>
