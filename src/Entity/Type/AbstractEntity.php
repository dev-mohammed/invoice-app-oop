<?php

namespace Entity;

use DateTime;

abstract class AbstractEntity
{
    protected $id;
    protected $dateCreated;
    protected $dateUpdated;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(?int $id): AbstractEntity
    {
        $this->id = $id;
        return $this;
    }

    public function getDateCreated(): ?DateTime
    {
        return $this->dateCreated;
    }

    public function setDateCreated(?DateTime $dateCreated): AbstractEntity
    {
        $this->dateCreated = $dateCreated;
        return $this;
    }

    public function getDateUpdated(): ?DateTime
    {
        return $this->dateUpdated;
    }


    public function setDateUpdated(?DateTime $dateUpdated): AbstractEntity
    {
        $this->dateUpdated = $dateUpdated;
        return $this;
    }


}