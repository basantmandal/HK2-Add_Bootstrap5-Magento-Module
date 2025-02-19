<?php

/**
 * Model - Config - DemoLinkv4
 *
 * @category  Module
 * @package   HK2_AddBootstrap5
 * @author    Basant Mandal <support@hashtagkitto.co.in>
 * @copyright 2023 Copyright (c) Basant Mandal (HK2 - HashTagKitto) (https://www.basantmandal.in/LICENSE.txt)
 * @license   MIT <https://www.basantmandal.in/LICENSE.txt>
 * @link      https://www.basantmandal.in/
 */

namespace HK2\AddBootstrap5\Model\Config;

use Magento\Framework\UrlInterface;
use Magento\Store\Model\StoreManagerInterface;

class DemoLinkv5 implements \Magento\Config\Model\Config\CommentInterface
{
    /**
     * @var StoreManagerInterface
     */
    private StoreManagerInterface $_storeManager;

    /**
     * @param UrlInterface $urlInterface
     * @param StoreManagerInterface $storeManagerInterface
     */
    public function __construct(UrlInterface $urlInterface, StoreManagerInterface $storeManagerInterface)
    {
        $this->_storeManager = $storeManagerInterface;
    }

    /**
     * Get Comment Text
     *
     * @param  [type] $elementValue
     *
     * @return string
     */
    public function getCommentText($elementValue)
    {
        $base_url = $this->_storeManager->getStore()->getBaseUrl(\Magento\Framework\UrlInterface::URL_TYPE_WEB);
        $url = $base_url . 'addbootstrap/demo5';

        return '<a href="' . $url . '"target="_blank">' . $url . '</a>';
    }
}
