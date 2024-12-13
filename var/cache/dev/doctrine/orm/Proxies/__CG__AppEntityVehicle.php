<?php

namespace Proxies\__CG__\App\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Vehicle extends \App\Entity\Vehicle implements \Doctrine\ORM\Proxy\InternalProxy
{
    use \Symfony\Component\VarExporter\LazyGhostTrait {
        initializeLazyObject as private;
        setLazyObjectAsInitialized as public __setInitialized;
        isLazyObjectInitialized as private;
        createLazyGhost as private;
        resetLazyObject as private;
    }

    public function __load(): void
    {
        $this->initializeLazyObject();
    }
    

    private const LAZY_OBJECT_PROPERTY_SCOPES = [
        "\0".parent::class."\0".'id' => [parent::class, 'id', null],
        "\0".parent::class."\0".'immatriculation' => [parent::class, 'immatriculation', null],
        "\0".parent::class."\0".'marque' => [parent::class, 'marque', null],
        "\0".parent::class."\0".'modele' => [parent::class, 'modele', null],
        "\0".parent::class."\0".'motorisation' => [parent::class, 'motorisation', null],
        "\0".parent::class."\0".'proprietaire' => [parent::class, 'proprietaire', null],
        'id' => [parent::class, 'id', null],
        'immatriculation' => [parent::class, 'immatriculation', null],
        'marque' => [parent::class, 'marque', null],
        'modele' => [parent::class, 'modele', null],
        'motorisation' => [parent::class, 'motorisation', null],
        'proprietaire' => [parent::class, 'proprietaire', null],
    ];

    public function __isInitialized(): bool
    {
        return isset($this->lazyObjectState) && $this->isLazyObjectInitialized();
    }

    public function __serialize(): array
    {
        $properties = (array) $this;
        unset($properties["\0" . self::class . "\0lazyObjectState"]);

        return $properties;
    }
}
