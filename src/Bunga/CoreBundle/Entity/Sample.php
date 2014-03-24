<?php

namespace Bunga\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Sample Entity
 *
 * @ORM\Table(name="core_sample")
 * @ORM\Entity(repositoryClass="Bunga\CoreBundle\Entity\SampleRepository")
 * @ORM\HasLifecycleCallbacks
 */
class Sample
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
	 * @var string
	 *
	 * @ORM\Column(name="name", type="string", length=255)
	 */
	private $name;

	/**
	 * @var string
	 *
	 * @ORM\Column(name="value", type="text")
	 */
	private $value;

	/**
	 * @var \DateTime
	 *
	 * @ORM\Column(name="createdAt", type="datetime")
	 */
	private $createdAt;

	/**
	 * @var \DateTime
	 *
	 * @ORM\Column(name="lastUpdateAt", type="datetime")
	 */
	private $lastUpdateAt;


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
	 * Set name
	 *
	 * @param string $name
	 *
	 * @return Sample
	 */
	public function setName($name)
	{
		$this->name = $name;

		return $this;
	}

	/**
	 * Get name
	 *
	 * @return string
	 */
	public function getName()
	{
		return $this->name;
	}

	/**
	 * Set value
	 *
	 * @param string $value
	 *
	 * @return Sample
	 */
	public function setValue($value)
	{
		$this->value = $value;

		return $this;
	}

	/**
	 * Get value
	 *
	 * @return string
	 */
	public function getValue()
	{
		return $this->value;
	}

	/**
	 * Set createdAt
	 *
	 * @param \DateTime $createdAt
	 *
	 * @return Sample
	 */
	private function setCreatedAt($createdAt)
	{
		$this->createdAt = $createdAt;

		return $this;
	}

	/**
	 * Get createdAt
	 *
	 * @return \DateTime
	 */
	public function getCreatedAt()
	{
		return $this->createdAt;
	}

	/**
	 * Set lastUpdateAt
	 *
	 * @param \DateTime $lastUpdateAt
	 *
	 * @return Sample
	 */
	private function setLastUpdateAt($lastUpdateAt)
	{
		$this->lastUpdateAt = $lastUpdateAt;

		return $this;
	}

	/**
	 * Get lastUpdateAt
	 *
	 * @return \DateTime
	 */
	public function getLastUpdateAt()
	{
		return $this->lastUpdateAt;
	}

	/**
	 * @ORM\PrePersist()
	 * @ORM\PreUpdate()
	 */
	public function setLastUpdateAtValue()
	{
		$datetime = new \DateTime();
		$this->lastUpdateAt = $datetime;
	}

	/**
	 * @ORM\PrePersist()
	 */
	public function setCreatedAtValue()
	{
		$datetime = new \DateTime();
		$this->createdAt = $datetime;
	}

	public function __toString()
	{
		if($this->name == null) {
			return 'Sample';
		} else {
			return $this->name;
		}

	}
}
