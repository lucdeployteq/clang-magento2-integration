<?php

namespace Clang\Clang\Model;

class EndPoint extends \Magento\Framework\Model\AbstractModel implements \Clang\Clang\Api\EndPointInterface
{
    const KEY_TYPE = 'type';
    const KEY_ENDPOINT = 'end_point';


    public function __construct(
        \Magento\Framework\Model\Context $context,
        \Magento\Framework\Registry $registry,
        \Magento\Framework\Model\ResourceModel\AbstractResource $resource = null,
        \Magento\Framework\Data\Collection\AbstractDb $resourceCollection = null,
        array $data = []
    ) {
        parent::__construct($context, $registry, $resource, $resourceCollection, $data);
    }


    /**
     * {@inheritdoc}
     */
    public function getType()
    {
        return $this->_getData(self::KEY_TYPE);
    }

    /**
     * {@inheritdoc}
     */
    public function setType($type)
    {
        return $this->setData(self::KEY_TYPE, $type);
    }

    /**
     * {@inheritdoc}
     */
    public function getEndPoint()
    {
        return $this->_getData(self::KEY_ENDPOINT);
    }

    /**
     * {@inheritdoc}
     */
    public function setEndPoint($endpoint)
    {
        return $this->setData(self::KEY_ENDPOINT, $endpoint);
    }
}
