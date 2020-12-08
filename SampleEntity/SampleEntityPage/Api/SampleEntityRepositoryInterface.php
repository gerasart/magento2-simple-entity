<?php

namespace SampleEntity\SampleEntityPage\Api;

use Magento\Framework\Exception\NoSuchEntityException;
use SampleEntity\SampleEntityPage\Api\Data\SampleEntityInterface;

interface SampleEntityRepositoryInterface
{
    /**
     * Save Sample data
     *
     * @param SampleEntityInterface $sample_entity
     * @return SampleEntityInterface
     */
    public function save(SampleEntityInterface $sample_entity): int;

    /**
     * @param $id
     * @return SampleEntityInterface
     * @throws NoSuchEntityException
     */
    public function get(int $id);

    /**
     * Delete sample_entity
     *
     * @param SampleEntityInterface $sample_entity
     * @return bool true on success
     */
    public function delete(Data\SampleEntityInterface $sample_entity);

    /**
     * @param int $id
     * @return bool true on success
     */
    public function deleteById($id);

}
