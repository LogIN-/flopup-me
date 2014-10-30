<?php

namespace fl\flopupBundle\Entity;

use Gedmo\Mapping\Annotation as Gedmo;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Table(name="links")
 * @ORM\Entity(repositoryClass="fl\flopupBundle\Entity\LinkRepository")
 */
class Link, \Serializable
{
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;
    /**
     * @ORM\Column(type="string", unique=true, length=64, nullable=false)
     */
    private $adress;
    /**
     * @ORM\Column(type="string", length=32)
     */
    private $hash;
    /**
     * @ORM\Column(type="string", length=40)
     */
    private $uid;
    /**
     * @ORM\Column(name="is_active", type="boolean")
     */
    private $isActive;
    /**
     * @ORM\Column(type="integer")
     */
    private $upvotes;
    /**
     * @ORM\Column(type="integer")
     */
    private $downvotes;
   /**
     * @var \DateTime
     *
     * @ORM\Column(name="created", type="datetime")
     */
    private $created;
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="updated", type="datetime")
     */
    private $updated;

    public function __construct()
    {
        $this->isActive = true;
    }
    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }
    /**
     * @inheritDoc
     */
    public function getAdress()
    {
        return $this->adress;
    }

    /**
     * @inheritDoc
     */
    public function getHash()
    {
        return $this->hash;
    }

    /**
     * @inheritDoc
     */
    public function getUid()
    {
        return $this->uid;
    }

    /**
     * @inheritDoc
     */
    public function getIsActive()
    {
        return $this->isActive;
    }    
    /**
     * @inheritDoc
     */
    public function getUpvotes()
    {
        return $this->upvotes;
    }    
    /**
     * @inheritDoc
     */
    public function getDownvotes()
    {
        return $this->downvotes;
    }
    /**
     * Get created
     *
     * @return \DateTime
     */
    public function getCreated()
    {
        return $this->created;
    }
    /**
     * Get updated
     *
     * @return \DateTime
     */
    public function getUpdated()
    {
        return $this->updated;
    }

    /**
     * Set adress
     *
     * @param string $adress
     * @return Link
     */
    public function setAdress($adress)
    {
        $this->adress = $adress;

        return $this;
    }
    /**
     * Set hash
     *
     * @param string $hash
     * @return Link
     */
    public function setHash($hash)
    {
        $this->hash = $hash;

        return $this;
    }
    /**
     * Set setUid
     *
     * @param integer $uid
     * @return Link
     */
    public function setUid($uid)
    {
        $this->uid = $uid;

        return $this;
    }

    /**
     * Set setIsActive
     *
     * @param boolean $isActive
     * @return Link
     */
    public function setIsActive($isActive)
    {
        $this->isActive = $isActive;

        return $this;
    }
    /**
     * Set setUpvotes
     *
     * @param integer $upvotes
     * @return Link
     */
    public function setUpvotes($upvotes)
    {
        $this->upvotes = $upvotes;

        return $this;
    }
    /**
     * Set setDownvotes
     *
     * @param integer $downvotes
     * @return Link
     */
    public function setDownvotes($downvotes)
    {
        $this->downvotes = $downvotes;

        return $this;
    }

    /**
     * Set created
     *
     * @param \DateTime $created
     * @return Link
     */
    public function setCreated($created)
    {
        $this->created = $created;

        return $this;
    }
    /**
     * Set updated
     *
     * @param \DateTime $updated
     * @return Link
     */
    public function setUpdated($updated)
    {
        $this->updated = $updated;

        return $this;
    }
    /**
     * Auto set the updated date
     *
     * @ORM\PreUpdate
     */
    public function setUpdatedValue()
    {
       $this->setUpdated(new \DateTime());
    }
    /**
     * Set initial value for created/updated values
     *
     * @ORM\PrePersist
     */
    public function setCreatedValues()
    {
        $this->setCreated(new \DateTime());
        $this->setUpdated(new \DateTime());
    }
    /**
     * @see \Serializable::serialize()
     */
    public function serialize()
    {
        return serialize(array(
            $this->id,
        ));
    }
    /**
     * @see \Serializable::unserialize()
     */
    public function unserialize($serialized)
    {
        list (
            $this->id,
        ) = unserialize($serialized);
    }
}
