<?php

namespace App\Entity;

use ArrayAccess;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

/**
 * @ORM\Entity(repositoryClass="App\Repository\UserRepository")
 * @UniqueEntity(fields="email", message="Email already taken")
 * @UniqueEntity(fields="username", message="Username already taken")
 */
class User implements UserInterface, ArrayAccess, \Serializable {
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
	 * @Assert\NotBlank()
	 * @ORM\Column(name="username", type="string", length=100, nullable=false, unique=true)
	 */
	private $username;

	/**
	 * @var string
	 * @Assert\NotBlank()
	 * @Assert\Email()
	 * @ORM\Column(name="email", type="string", length=100, nullable=false, unique=true)
	 */
	private $email;

	/**
	 * @Assert\NotBlank()
	 * @Assert\Length(max=4096)
	 */
	private $plainPassword;

	/**
	 * @var string
	 *
	 * @ORM\Column(name="password", type="string", length=64, nullable=false)
	 */
	private $password;


	/**
	 * @ORM\Column(type="array")
	 */
	private $roles;
 private $__EXTRA__LINE;
 /**
  * @ORM\OneToMany(targetEntity="App\Entity\Confession", mappedBy="belongsto")
  */
 private $confessions;

 /**
  * @ORM\Column(type="datetime")
  */
 private $lastConnection;

 /**
  * @ORM\Column(type="string", length=100)
  */
 private $contact;

	public function __construct() {
		$this->roles = array('ROLE_USER');
  $this->confessions = new ArrayCollection();
	}


	public function getSalt() {
		// you *may* need a real salt depending on your encoder
		// see section on salt below
		return null;
	}

	public function eraseCredentials() {
	}

	/** @see \Serializable::serialize() */
	public function serialize() {
		return serialize( array(
			$this->id,
			$this->username,
			$this->password,
			// see section on salt below
			// $this->salt,
		) );
	}

	/** @see \Serializable::unserialize()
	 * @param string $serialized
	 */
	public function unserialize( $serialized ) {
		list (
			$this->id,
			$this->username,
			$this->password,
			// see section on salt below
			// $this->salt
			) = unserialize( $serialized, [ 'allowed_classes' => false ] );
	}

	public function getId() {
		return $this->id;
	}

	public function getUsername(): ?string {
		return $this->username;
	}

	public function setUsername( string $username ): self {
		$this->username = $username;

		return $this;
	}

	public function getEmail(): ?string {
		return $this->email;
	}

	public function setEmail( string $email ): self {
		$this->email = $email;

		return $this;
	}

	public function getPassword(): ?string {
		return $this->password;
	}

	public function setPassword( string $password ): self {
		$this->password = $password;

		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getPlainPassword() {
		return $this->plainPassword;
	}

	/**
	 * @param mixed $plainPassword
	 */
	public function setPlainPassword( $plainPassword ) {
		$this->plainPassword = $plainPassword;
	}


	/**
	 * Returns the roles granted to the user.
	 *
	 * <code>
	 * public function getRoles()
	 * {
	 *     return array('ROLE_USER');
	 * }
	 * </code>
	 *
	 * Alternatively, the roles might be stored on a ``roles`` property,
	 * and populated in any number of different ways when the user object
	 * is created.
	 *
	 */
	public function getRoles()
	{
		return $this->roles;
	}
 /**
  * @return Collection|Confession[]
  */
 public function getConfessions(): Collection
 {
     return $this->confessions;
 }

 public function addConfession(Confession $confession): self
 {
     if (!$this->confessions->contains($confession)) {
         $this->confessions[] = $confession;
         $confession->setBelongsto($this);
     }

     return $this;
 }

 public function removeConfession(Confession $confession): self
 {
     if ($this->confessions->contains($confession)) {
         $this->confessions->removeElement($confession);
         // set the owning side to null (unless already changed)
         if ($confession->getBelongsto() === $this) {
             $confession->setBelongsto(null);
         }
     }

     return $this;
 }

 public function getLastConnection(): ?\DateTimeInterface
 {
     return $this->lastConnection;
 }

	/**
	 * @param \DateTimeInterface $lastConnection
	 *
	 * @return User
	 */
	public function setLastConnection(\DateTimeInterface $lastConnection): self
 {
     $this->lastConnection = $lastConnection;
     return $this;
 }

 public function getContact(): ?string
 {
     return $this->contact;
 }

 public function setContact(string $contact): self
 {
     $this->contact = $contact;
     return $this;
 }


	/**
	 * Whether a offset exists
	 * @link http://php.net/manual/en/arrayaccess.offsetexists.php
	 *
	 * @param mixed $offset <p>
	 * An offset to check for.
	 * </p>
	 *
	 * @return boolean true on success or false on failure.
	 * </p>
	 * <p>
	 * The return value will be casted to boolean if non-boolean was returned.
	 * @since 5.0.0
	 */
	public function offsetExists( $offset ) {
		// TODO: Implement offsetExists() method.
	}

	/**
	 * Offset to retrieve
	 * @link http://php.net/manual/en/arrayaccess.offsetget.php
	 *
	 * @param mixed $offset <p>
	 * The offset to retrieve.
	 * </p>
	 *
	 * @return mixed Can return all value types.
	 * @since 5.0.0
	 */
	public function offsetGet( $offset ) {
		// TODO: Implement offsetGet() method.
	}

	/**
	 * Offset to set
	 * @link http://php.net/manual/en/arrayaccess.offsetset.php
	 *
	 * @param mixed $offset <p>
	 * The offset to assign the value to.
	 * </p>
	 * @param mixed $value <p>
	 * The value to set.
	 * </p>
	 *
	 * @return void
	 * @since 5.0.0
	 */
	public function offsetSet( $offset, $value ) {
		// TODO: Implement offsetSet() method.
	}

	/**
	 * Offset to unset
	 * @link http://php.net/manual/en/arrayaccess.offsetunset.php
	 *
	 * @param mixed $offset <p>
	 * The offset to unset.
	 * </p>
	 *
	 * @return void
	 * @since 5.0.0
	 */
	public function offsetUnset($offset) {
 // TODO: Implement offsetUnset() method.
}}
