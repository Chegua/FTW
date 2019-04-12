<?php

class documentos
{
    //ATRIBUTOS
    private $nombre;
    private $guardado;

    public function __construct($nombre='',$guardado=''){
        $this->nombre= $nombre;
        $this->guardado= $guardado;

    }

    public function subir()
    {
        if(!file_exists('archivos')){

            mkdir('archivos',0777,true);
            if(file_exists('archivos')){
        
                if(move_uploaded_file($this->guardado, 'archivos/'.$this->nombre)){
                    echo "Archivo guardado con exito";
                }else{
                    echo "Archivo no se pudo guardar";
                }
            }
        }else{
            if(move_uploaded_file($this->guardado, 'archivos/'.$this->nombre)){
                echo "Archivo guardado con exito";
            }else{
                echo $this->nombre."Archivo no se pudo guardar";
            }
        }
    }
    
}





