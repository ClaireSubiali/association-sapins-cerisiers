<?php

class Event
{
    private $id;
    private $title;
    private $date;
    private $location;
    private $image;
    private $description;
    private $created_at;
    private $updated_at;
    private $type_id;

    public function findAll()
    {
        $pdo = Database::getPDO();
        $sql = 'SELECT * FROM `Event` ORDER BY `date`';
        $pdoStatement = $pdo->query($sql);
        $results = $pdoStatement->fetchAll(PDO::FETCH_CLASS, 'Event');

        return $results;
    }
    /**
     * Get the value of id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Get the value of title
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Get the value of date
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Get the value of location
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * Get the value of image
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Get the value of description
     */
    public function getDescription()
    {
        return $this->description;
    }
}
