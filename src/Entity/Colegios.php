<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Colegios
 *
 * @ORM\Table(name="colegios")
 * @ORM\Entity
 */
class Colegios
{
    /**
     * @var string
     *
     * @ORM\Column(name="ID", type="string", length=8, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string|null
     *
     * @ORM\Column(name="NAME", type="string", length=63, nullable=true)
     */
    private $name;

    /**
     * @var string|null
     *
     * @ORM\Column(name="CODE_1", type="string", length=4, nullable=true)
     */
    private $code1;

    /**
     * @var string|null
     *
     * @ORM\Column(name="CODE_2", type="string", length=7, nullable=true)
     */
    private $code2;

    /**
     * @var string|null
     *
     * @ORM\Column(name="CODE_3", type="string", length=16, nullable=true)
     */
    private $code3;

    /**
     * @var string|null
     *
     * @ORM\Column(name="CANTIDAD", type="string", length=9, nullable=true)
     */
    private $cantidad;

    /**
     * @var string|null
     *
     * @ORM\Column(name="CEL", type="string", length=20, nullable=true)
     */
    private $cel;

    public function getId(): ?string
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getCode1(): ?string
    {
        return $this->code1;
    }

    public function setCode1(?string $code1): self
    {
        $this->code1 = $code1;

        return $this;
    }

    public function getCode2(): ?string
    {
        return $this->code2;
    }

    public function setCode2(?string $code2): self
    {
        $this->code2 = $code2;

        return $this;
    }

    public function getCode3(): ?string
    {
        return $this->code3;
    }

    public function setCode3(?string $code3): self
    {
        $this->code3 = $code3;

        return $this;
    }

    public function getCantidad(): ?string
    {
        return $this->cantidad;
    }

    public function setCantidad(?string $cantidad): self
    {
        $this->cantidad = $cantidad;

        return $this;
    }

    public function getCel(): ?string
    {
        return $this->cel;
    }

    public function setCel(?string $cel): self
    {
        $this->cel = $cel;

        return $this;
    }


}
