<?php

namespace Acme\LoginBundle\Entity;

use Symfony\Component\Security\Core\Role\RoleInterface;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class Role implements RoleInterface {

    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue
     *
     * @var integer $id
     */
    protected $id;
    /**
     * @ORM\Column(type="string")
     *
     * @var string $name
     */
    protected $name;
    /**
     * @ORM\Column(type="datetime", name="created_at")
     *
     * @var DateTime $createdAt
     */
    protected $createdAt;

    /**
     * Gets the id.
     *
     * @return integer The id.
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Gets the role name.
     *
     * @return string The name.
     */
    public function getName() {
        return $this->name;
    }

    /**
     * Sets the role name.
     *
     * @param string $value The name.
     */
    public function setName($value) {
        $this->name = $value;
    }

    /**
     * Gets the DateTime the role was created.
     *
     * @return DateTime A DateTime object.
     */
    public function getCreatedAt() {
        return $this->createdAt;
    }

    /**
     * Constructs a new instance of Role.
     */
    public function __construct() {
        $this->createdAt = new \DateTime();
    }

    /**
     * Implementation of getRole for the RoleInterface.
     * 
     * @return string The role.
     */
    public function getRole() {
        return $this->getName();
    }

}