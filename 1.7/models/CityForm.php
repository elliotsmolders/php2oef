<?php


class CityForm extends AbstractCity
{
    private $lan_id;

    public function getLanId()
    {
        return $this->lan_id;
    }

    /**
     * @param mixed $lan_id
     */
    public function setLanId($lan_id): void
    {
        $this->lan_id = $lan_id;
    }
}