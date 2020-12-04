<?php

namespace SampleEntity\SampleEntityPage\Api;

interface SimpleEntityRepositoryInterface
{

    /**
     * Save simple_entity
     *
     * @param \SampleEntity\SampleEntityPage\Api\Data\SimpleEntityInterface $simple_entity
     * @return \SampleEntity\SampleEntityPage\Api\Data\SimpleEntityInterface
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function save(Data\SimpleEntityInterface $simple_entity);

    /**
     * Retrieve simple_entity
     *
     * @param int $id
     * @return \SampleEntity\SampleEntityPage\Api\Data\SimpleEntityInterface
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function getById($id);

    /**
     * Delete simple_entity
     *
     * @param \SampleEntity\SampleEntityPage\Api\Data\SimpleEntityInterface $simple_entity
     * @return bool true on success
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function delete(Data\SimpleEntityInterface $simple_entity);

    /**
     * Delete simple_entity by ID
     *
     * @param int $id
     * @return bool true on success
     * @throws \Magento\Framework\Exception\NoSuchEntityException
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function deleteById($id);
}
