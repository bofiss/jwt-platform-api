<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Annotation\ApiResource;

/**
 * @ApiResource(
 *   itemOperations={
 *      "get"={"method"="GET"},
 *      "put"={"method"="PUT"},
 *      "delete"={"method"="DELETE"},
 *      "countCommentsinArticle"={
 *        "route_name"="count_avis",
 *        "swagger_context" = {
 *          "responses" = {
 *            "200" = {
 *              "description" = "The Comment count has been returned in the response"
 *            }
 *          }
 *        }
 *      }
 *   }
 * )
 * @ORM\Entity(repositoryClass="App\Repository\AvisRepository")
 */
class Avis
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="username", type="string", length=255, nullable=false)
     */
    private $username;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255, nullable=false)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="numero_adherant", type="string", length=255, nullable=false)
     */
    private $numeroAdherant;

    /**
     * @var string
     *
     * @ORM\Column(name="comment", type="text", length=0, nullable=false)
     */
    private $comment;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="created_at", type="datetime", nullable=true)
     */
    private $createdAt;

    public function __toString()
    {
        return (string) $this->getId();
    }



    /**
     * @return  return the $id
     */
    public function getId() {
        return $this->id;
    }

    /**
     * @param $id the $id to set
     */
    public function setId( $id) {
        $this->id = $id;
        return $this;
    }

    /**
     * @return  return the $username
     */
    public function getUsername() {
        return $this->username;
    }

    /**
     * @param $username the $username to set
     */
    public function setUsername( $username) {
        $this->username = $username;
        return $this;
    }

    /**
     * @return  return the $email
     */
    public function getEmail() {
        return $this->email;
    }

    /**
     * @param $email the $email to set
     */
    public function setEmail( $email) {
        $this->email = $email;
    }

    /**
     * @return  return the $numeroAdherant
     */
    public function getNumeroAdherant() {
        return $this->numeroAdherant;
    }

    /**
     * @param $numeroAdherant the $numeroAdherant to set
     */
    public function setNumeroAdherant( $numeroAdherant) {
        $this->numeroAdherant = $numeroAdherant;
        return $this;
    }

    /**
     * @return  return the $comment
     */
    public function getComment() {
        return $this->comment;
    }

    /**
     * @param $comment the $comment to set
     */
    public function setComment( $comment) {
        $this->comment = $comment;
        return $this;
    }

    /**
     * @return  return the $createdAt
     */
    public function  getCreatedAt() {
        return $this->createdAt;
    }

    /**
     * @param $createdAt the $createdAt to set
     */
    public function setCreatedAt( $createdAt) {
        $this->createdAt = $createdAt;
        return $this;
    }

}
