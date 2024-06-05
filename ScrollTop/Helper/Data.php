<?php
/**
 * CNTechnoLabs
 * Copyright (C) 2023 CNTechnoLabs 
 *
 * @category  CNTechnoLabs
 * @package   CNTechnoLabs_ScrollTop
 * @copyright Copyright (c) 2023 CNTechnoLabs
 * @license   http://opensource.org/licenses/gpl-3.0.html GNU General Public License,version 3 (GPL-3.0)
 * @author    CNTechnoLabs
 */

namespace CNTechnoLabs\ScrollTop\Helper;

use Magento\Framework\App\Helper\Context;
use Magento\Store\Model\ScopeInterface;

class Data extends \Magento\Framework\App\Helper\AbstractHElper
{
    const XML_PATH_ENABLE = 'cntech_scrolltop/general/enable_scrolltop';

    /**
     * Constructor
     * @param Context $context
     */

    public function __construct(
        Context $context
    ) {
        parent::__construct($context);
    }

    /** @return bool */

    public function getModuleStatus()
    {
        return $this->scopeConfig->getValue(
            self::XML_PATH_ENABLE,
            ScopeInterface::SCOPE_STORE
        );
    }

}