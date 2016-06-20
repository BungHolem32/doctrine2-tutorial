<?php

/**
 * @Entity
 * @Table(name="book")
 */
class Book
{
    /** @Id
     * @Column(type="integer") @GeneratedValue */
    private $id;
    /** @Column(length=140) */
    private $title;
    /** @Column(type="datetime") */
    private $createdAt;

    /** @Column(type="author") */
    private $author;


    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    
    /**
     * @return mixed
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param mixed $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * @return mixed
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * @param mixed $createdAt
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;
    }

}