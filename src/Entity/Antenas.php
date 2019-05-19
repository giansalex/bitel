<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Antenas
 *
 * @ORM\Table(name="antenas")
 * @ORM\Entity
 */
class Antenas
{
    /**
     * @var string
     *
     * @ORM\Column(name="ID", type="string", length=13, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string|null
     *
     * @ORM\Column(name="SOS", type="string", length=5, nullable=true)
     */
    private $sos;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DIRECCION", type="string", length=244, nullable=true)
     */
    private $direccion;

    /**
     * @var string|null
     *
     * @ORM\Column(name="PROPIETARIO", type="string", length=441, nullable=true)
     */
    private $propietario;

    /**
     * @var string|null
     *
     * @ORM\Column(name="TELEFONO_ATC", type="string", length=530, nullable=true)
     */
    private $telefonoAtc;

    /**
     * @var string|null
     *
     * @ORM\Column(name="OBSERVACION", type="string", length=73, nullable=true)
     */
    private $observacion;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DISTRITO", type="string", length=24, nullable=true)
     */
    private $distrito;

    /**
     * @var string|null
     *
     * @ORM\Column(name="PROVINCIA", type="string", length=10, nullable=true)
     */
    private $provincia;

    /**
     * @var string|null
     *
     * @ORM\Column(name="LATITUD", type="decimal", precision=12, scale=10, nullable=true)
     */
    private $latitud;

    /**
     * @var string|null
     *
     * @ORM\Column(name="LONGITUD", type="decimal", precision=12, scale=10, nullable=true)
     */
    private $longitud;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ALTURA_CASA", type="string", length=10, nullable=true)
     */
    private $alturaCasa;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ALTURA_COLUMNA", type="decimal", precision=4, scale=1, nullable=true)
     */
    private $alturaColumna;

    /**
     * @var string|null
     *
     * @ORM\Column(name="SHELTER", type="string", length=11, nullable=true)
     */
    private $shelter;

    /**
     * @var string|null
     *
     * @ORM\Column(name="SHELTER2", type="string", length=11, nullable=true)
     */
    private $shelter2;

    /**
     * @var string|null
     *
     * @ORM\Column(name="estado", type="string", length=4, nullable=true)
     */
    private $estado;

    /**
     * @var string|null
     *
     * @ORM\Column(name="tipo", type="string", length=4, nullable=true)
     */
    private $tipo;

    /**
     * @var string|null
     *
     * @ORM\Column(name="SUMINISTRO", type="string", length=10, nullable=true)
     */
    private $suministro;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DWDM_AGG", type="string", length=7, nullable=true)
     */
    private $dwdmAgg;

    /**
     * @var int|null
     *
     * @ORM\Column(name="SRT_No_Yes", type="integer", nullable=true)
     */
    private $srtNoYes;

    /**
     * @var int|null
     *
     * @ORM\Column(name="VIBA", type="integer", nullable=true)
     */
    private $viba;

    /**
     * @var int|null
     *
     * @ORM\Column(name="Optical_Fiber", type="integer", nullable=true)
     */
    private $opticalFiber;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Type_of_DC_system", type="string", length=7, nullable=true)
     */
    private $typeOfDcSystem;

    /**
     * @var int|null
     *
     * @ORM\Column(name="Quantity_of_batteries", type="integer", nullable=true)
     */
    private $quantityOfBatteries;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Air_condition", type="string", length=7, nullable=true)
     */
    private $airCondition;

    /**
     * @var int|null
     *
     * @ORM\Column(name="Dry_contact", type="integer", nullable=true)
     */
    private $dryContact;

    /**
     * @var int|null
     *
     * @ORM\Column(name="Jail_protection", type="integer", nullable=true)
     */
    private $jailProtection;

    /**
     * @var string|null
     *
     * @ORM\Column(name="PADLOCK", type="string", length=35, nullable=true)
     */
    private $padlock;

    /**
     * @var string|null
     *
     * @ORM\Column(name="LLAVE", type="string", length=15, nullable=true)
     */
    private $llave;

    /**
     * @var string|null
     *
     * @ORM\Column(name="HAPPY_CALL", type="string", length=107, nullable=true)
     */
    private $happyCall;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ON_AIR", type="string", length=7, nullable=true)
     */
    private $onAir;

    /**
     * @var string|null
     *
     * @ORM\Column(name="FECHA", type="string", length=19, nullable=true)
     */
    private $fecha;

    /**
     * @var string|null
     *
     * @ORM\Column(name="MAINTENANCE", type="string", length=19, nullable=true)
     */
    private $maintenance;

    public function getId(): ?string
    {
        return $this->id;
    }

    public function getSos(): ?string
    {
        return $this->sos;
    }

    public function setSos(?string $sos): self
    {
        $this->sos = $sos;

        return $this;
    }

    public function getDireccion(): ?string
    {
        return $this->direccion;
    }

    public function setDireccion(?string $direccion): self
    {
        $this->direccion = $direccion;

        return $this;
    }

    public function getPropietario(): ?string
    {
        return $this->propietario;
    }

    public function setPropietario(?string $propietario): self
    {
        $this->propietario = $propietario;

        return $this;
    }

    public function getTelefonoAtc(): ?string
    {
        return $this->telefonoAtc;
    }

    public function setTelefonoAtc(?string $telefonoAtc): self
    {
        $this->telefonoAtc = $telefonoAtc;

        return $this;
    }

    public function getObservacion(): ?string
    {
        return $this->observacion;
    }

    public function setObservacion(?string $observacion): self
    {
        $this->observacion = $observacion;

        return $this;
    }

    public function getDistrito(): ?string
    {
        return $this->distrito;
    }

    public function setDistrito(?string $distrito): self
    {
        $this->distrito = $distrito;

        return $this;
    }

    public function getProvincia(): ?string
    {
        return $this->provincia;
    }

    public function setProvincia(?string $provincia): self
    {
        $this->provincia = $provincia;

        return $this;
    }

    public function getLatitud()
    {
        return $this->latitud;
    }

    public function setLatitud($latitud): self
    {
        $this->latitud = $latitud;

        return $this;
    }

    public function getLongitud()
    {
        return $this->longitud;
    }

    public function setLongitud($longitud): self
    {
        $this->longitud = $longitud;

        return $this;
    }

    public function getAlturaCasa(): ?string
    {
        return $this->alturaCasa;
    }

    public function setAlturaCasa(?string $alturaCasa): self
    {
        $this->alturaCasa = $alturaCasa;

        return $this;
    }

    public function getAlturaColumna()
    {
        return $this->alturaColumna;
    }

    public function setAlturaColumna($alturaColumna): self
    {
        $this->alturaColumna = $alturaColumna;

        return $this;
    }

    public function getShelter(): ?string
    {
        return $this->shelter;
    }

    public function setShelter(?string $shelter): self
    {
        $this->shelter = $shelter;

        return $this;
    }

    public function getShelter2(): ?string
    {
        return $this->shelter2;
    }

    public function setShelter2(?string $shelter2): self
    {
        $this->shelter2 = $shelter2;

        return $this;
    }

    public function getEstado(): ?string
    {
        return $this->estado;
    }

    public function setEstado(?string $estado): self
    {
        $this->estado = $estado;

        return $this;
    }

    public function getTipo(): ?string
    {
        return $this->tipo;
    }

    public function setTipo(?string $tipo): self
    {
        $this->tipo = $tipo;

        return $this;
    }

    public function getSuministro(): ?string
    {
        return $this->suministro;
    }

    public function setSuministro(?string $suministro): self
    {
        $this->suministro = $suministro;

        return $this;
    }

    public function getDwdmAgg(): ?string
    {
        return $this->dwdmAgg;
    }

    public function setDwdmAgg(?string $dwdmAgg): self
    {
        $this->dwdmAgg = $dwdmAgg;

        return $this;
    }

    public function getSrtNoYes(): ?int
    {
        return $this->srtNoYes;
    }

    public function setSrtNoYes(?int $srtNoYes): self
    {
        $this->srtNoYes = $srtNoYes;

        return $this;
    }

    public function getViba(): ?int
    {
        return $this->viba;
    }

    public function setViba(?int $viba): self
    {
        $this->viba = $viba;

        return $this;
    }

    public function getOpticalFiber(): ?int
    {
        return $this->opticalFiber;
    }

    public function setOpticalFiber(?int $opticalFiber): self
    {
        $this->opticalFiber = $opticalFiber;

        return $this;
    }

    public function getTypeOfDcSystem(): ?string
    {
        return $this->typeOfDcSystem;
    }

    public function setTypeOfDcSystem(?string $typeOfDcSystem): self
    {
        $this->typeOfDcSystem = $typeOfDcSystem;

        return $this;
    }

    public function getQuantityOfBatteries(): ?int
    {
        return $this->quantityOfBatteries;
    }

    public function setQuantityOfBatteries(?int $quantityOfBatteries): self
    {
        $this->quantityOfBatteries = $quantityOfBatteries;

        return $this;
    }

    public function getAirCondition(): ?string
    {
        return $this->airCondition;
    }

    public function setAirCondition(?string $airCondition): self
    {
        $this->airCondition = $airCondition;

        return $this;
    }

    public function getDryContact(): ?int
    {
        return $this->dryContact;
    }

    public function setDryContact(?int $dryContact): self
    {
        $this->dryContact = $dryContact;

        return $this;
    }

    public function getJailProtection(): ?int
    {
        return $this->jailProtection;
    }

    public function setJailProtection(?int $jailProtection): self
    {
        $this->jailProtection = $jailProtection;

        return $this;
    }

    public function getPadlock(): ?string
    {
        return $this->padlock;
    }

    public function setPadlock(?string $padlock): self
    {
        $this->padlock = $padlock;

        return $this;
    }

    public function getLlave(): ?string
    {
        return $this->llave;
    }

    public function setLlave(?string $llave): self
    {
        $this->llave = $llave;

        return $this;
    }

    public function getHappyCall(): ?string
    {
        return $this->happyCall;
    }

    public function setHappyCall(?string $happyCall): self
    {
        $this->happyCall = $happyCall;

        return $this;
    }

    public function getOnAir(): ?string
    {
        return $this->onAir;
    }

    public function setOnAir(?string $onAir): self
    {
        $this->onAir = $onAir;

        return $this;
    }

    public function getFecha(): ?string
    {
        return $this->fecha;
    }

    public function setFecha(?string $fecha): self
    {
        $this->fecha = $fecha;

        return $this;
    }

    public function getMaintenance(): ?string
    {
        return $this->maintenance;
    }

    public function setMaintenance(?string $maintenance): self
    {
        $this->maintenance = $maintenance;

        return $this;
    }


}
