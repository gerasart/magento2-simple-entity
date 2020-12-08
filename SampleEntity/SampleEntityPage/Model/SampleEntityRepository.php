<?php


namespace SampleEntity\SampleEntityPage\Model;


use Gene\RepeatOrders\Api\Data\RepeatOrderInterface;
use SampleEntity\SampleEntityPage\Api\Data\SampleEntityInterface;
use SampleEntity\SampleEntityPage\Api\SampleEntityRepositoryInterface;
use SampleEntity\SampleEntityPage\Model\ResourceModel\SampleEntityResource;
use SampleEntity\SampleEntityPage\Model\ResourceModel\SampleEntity\CollectionFactory;
use SampleEntity\SampleEntityPage\Model\ResourceModel\SampleEntity\Collection;
use Magento\Framework\Api\SearchCriteriaBuilder;
use Magento\Framework\Exception\CouldNotDeleteException;
use Magento\Framework\Exception\CouldNotSaveException;
use Magento\Framework\Exception\LocalizedException;
use Magento\Framework\Exception\NoSuchEntityException;

class SampleEntityRepository implements SampleEntityRepositoryInterface
{

    /**
     * @var SampleEntityResource
     */
    protected $sampleEntityResource;

    /**
     * @var CollectionFactory
     */
    protected $sampleEntityFactory;

    /**
     * @var SearchCriteriaBuilder
     */
    protected $searchCriteriaBuilder;


    /**
     * RepeatOrderRepository constructor.
     * @param SampleEntityResource $sampleEntityresource
     * @param CollectionFactory $sampleEntityFactory
     * @param SearchCriteriaBuilder $searchCriteriaBuilder
     */
    public function __construct(
        SampleEntityResource $sampleEntityResource,
        CollectionFactory $sampleEntityFactory,
        SearchCriteriaBuilder $searchCriteriaBuilder
    )
    {
        $this->sampleEntityResource = $sampleEntityResource;
        $this->sampleEntityFactory = $sampleEntityFactory;
        $this->searchCriteriaBuilder = $searchCriteriaBuilder;
    }


    public function save(SampleEntityInterface $sample_entity): int
    {
        // TODO: Implement save() method.
    }


    /**
     * @param int $id
     * @return SampleEntityInterface|Collection
     * @throws NoSuchEntityException
     */
    public function get(int $id)
    {
        try {
            $samplePage = $this->sampleEntityFactory->create();

            $this->sampleEntityResource->load($samplePage, $id);
        } catch (\Exception $exception) {
            throw new NoSuchEntityException(__(
                'Could not load page: %1',
                $exception->getMessage()
            ));
        }
        return $samplePage;
    }

    public function delete(SampleEntityInterface $sample_entity)
    {
        // TODO: Implement delete() method.
    }

    public function deleteById($id)
    {
        // TODO: Implement deleteById() method.
    }
}
