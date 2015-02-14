<?php

namespace RestMan\ApiBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UserLike
 *
 * @ORM\Table(name="user_likes")
 * @ORM\Entity(repositoryClass="RestMan\ApiBundle\Entity\UserLikeRepository")
 */
class UserLike
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\ManyToOne(targetEntity="UserProfile")
     * @ORM\JoinColumn(name="user_profile_id", referencedColumnName="id")
     */
    private $userProfileId;

    /**
     * @var integer
     *
     * @ORM\ManyToOne(targetEntity="Restaurant")
     * @ORM\JoinColumn(name="restaurant_id", referencedColumnName="id")
     */
    private $restaurantId;


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
     * Set userProfileId
     *
     * @param integer $userProfileId
     * @return UserLike
     */
    public function setUserProfileId($userProfileId)
    {
        $this->userProfileId = $userProfileId;

        return $this;
    }

    /**
     * Get userProfileId
     *
     * @return integer 
     */
    public function getUserProfileId()
    {
        return $this->userProfileId;
    }

    /**
     * Set restaurantId
     *
     * @param integer $restaurantId
     * @return UserLike
     */
    public function setRestaurantId($restaurantId)
    {
        $this->restaurantId = $restaurantId;

        return $this;
    }

    /**
     * Get restaurantId
     *
     * @return integer 
     */
    public function getRestaurantId()
    {
        return $this->restaurantId;
    }
}
