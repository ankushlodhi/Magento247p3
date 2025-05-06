<?php
namespace Ankush\Pestle\Ui\Component\Listing\DataProviders\Ankush\Pestle;


/**
 * Class Things
 */
class Things extends \Magento\Ui\DataProvider\AbstractDataProvider
{    
    public function __construct(
        $name,
        $primaryFieldName,
        $requestFieldName,
        \Ankush\Pestle\Model\ResourceModel\Thing\CollectionFactory $collectionFactory,
        array $meta = [],
        array $data = []
    ) {
        parent::__construct($name, $primaryFieldName, $requestFieldName, $meta, $data);
        $this->collection = $collectionFactory->create();
    }
}
