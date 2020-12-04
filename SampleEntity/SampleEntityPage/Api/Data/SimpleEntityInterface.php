<?php


namespace SampleEntity\SampleEntityPage\Api\Data;


interface SimpleEntityInterface
{

    /**
     * Constants for keys of data array.
     */
    const NAME = 'name';
    const TYPE = 'type';
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

    /**
     * Get name
     *
     * @return string|null
     */
    public function getName();

    /**
     * Set name
     *
     * @param string $name
     * @return $this
     */
    public function setName($name);


    /**
     * Get type
     *
     * @return string|null
     */
    public function getType();

    /**
     * Set content
     *
     * @param string $type
     * @return $this
     */
    public function setType($type);

    /**
     * Get created date
     *
     * @return string|null
     */
    public function getCreatedAt();

    /**
     * Set created date
     *
     * @param string $createdAt
     * @return $this
     */
    public function setCreatedAt($createdAt);

    /**
     * Get updated date
     *
     * @return string|null
     */
    public function getUpdatedAt();

    /**
     * Set updated date
     *
     * @param string $updatedAt
     * @return $this
     */
    public function setUpdatedAt($updatedAt);

}
