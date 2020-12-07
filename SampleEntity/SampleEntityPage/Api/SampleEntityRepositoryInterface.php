<?php

namespace SampleEntity\SampleEntityPage\Api;

interface SampleEntityRepositoryInterface
{

    /**
     * Save sample_entity
     *
     * @param \SampleEntity\SampleEntityPage\Api\Data\SampleEntityInterface $sample_entity
     * @return \SampleEntity\SampleEntityPage\Api\Data\SampleEntityInterface
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function save(Data\SampleEntityInterface $sample_entity);

    /**
     * Retrieve sample_entity
     *
     * @param int $id
     * @return \SampleEntity\SampleEntityPage\Api\Data\SampleEntityInterface
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function getById($id);

    /**
     * Delete sample_entity
     *
     * @param \SampleEntity\SampleEntityPage\Api\Data\SampleEntityInterface $sample_entity
     * @return bool true on success
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function delete(Data\SampleEntityInterface $sample_entity);

    /**
     * Delete sample_entity by ID
     *
     * @param int $id
     * @return bool true on success
     * @throws \Magento\Framework\Exception\NoSuchEntityException
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function deleteById($id);
}
