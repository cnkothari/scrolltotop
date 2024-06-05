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

namespace CNTechnoLabs\ScrollTop\Block;

use Magento\Framework\View\Element\Template;
use CNTechnoLabs\ScrollTop\Helper\Data;
use Magento\Framework\View\Element\Template\Context;

class ScrollTop extends Template
{
    protected $_template = 'CNTechnoLabs_ScrollTop::scrolltop.phtml';

    private $helperData;

    /**
     * Constructor
     * @param Data $helperData
     */

    public function __construct(
        Context $context,
        Data $helperData
    ) {
        $this->helperData = $helperData;
        parent::__construct($context);
    }

    public function getStatus()
    {
        return $this->helperData->getModuleStatus();
    }

}

