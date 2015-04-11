<?php

namespace Cekurte\Psr\CompatibilityBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="user")
 */
class User extends BaseUser
{
    /**
     * @var integer
     *
     * @ORM\Id
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @var string
     *
     * @ORM\Column(name="github_id", type="string", length=255, nullable=true)
     */
    protected $githubId;
    /**
     * @var string
     *
     * @ORM\Column(name="github_access_token", type="string", length=255, nullable=true)
     */
    protected $githubAccessToken;

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
     * Set githubId
     *
     * @param string $githubId
     * @return User
     */
    public function setGithubId($githubId)
    {
        $this->githubId = $githubId;

        return $this;
    }

    /**
     * Get githubId
     *
     * @return string 
     */
    public function getGithubId()
    {
        return $this->githubId;
    }

    /**
     * Set githubAccessToken
     *
     * @param string $githubAccessToken
     * @return User
     */
    public function setGithubAccessToken($githubAccessToken)
    {
        $this->githubAccessToken = $githubAccessToken;

        return $this;
    }

    /**
     * Get githubAccessToken
     *
     * @return string 
     */
    public function getGithubAccessToken()
    {
        return $this->githubAccessToken;
    }
}
