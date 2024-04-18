<?php

namespace App\Entity;

use App\Repository\NombreRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=NombreRepository::class)
 */
class Nombre
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="decimal", precision=10, scale=0)
     */
    private $nb;
    public function constract ($n){
        $this->nb=$n;
    }
    public function fact ():int{
        if($this->nb<1){
            return 0;
        throw new\Exception('npmbre invalide');}

        
        else {
            $f=1;
            for ($i=1; $i <=$this->nb; $i++) { 
                $f=$f*$i;}
                return $f;
            }
        }
    


    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNb(): ?string
    {
        return $this->nb;
    }

    public function setNb(string $nb): self
    {
        $this->nb = $nb;

        return $this;
    }
    public function except(int $nb): self
    {
        $this->nb = $nb;

        return $this;
    }
    

}
