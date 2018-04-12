<?php
namespace MageMojo\SplitDb\App;
use Magento\Framework\App\State as OriginalState;

    /**
     * Extend the state functions so we can get the areaCode without it blowing up if it hasn't been set yet
     */
	class State extends OriginalState
	{
	  public function smartGetAreaCode() {
	    if ($this->_areaCode) {
	      return $this->_areaCode;
	    }
	    return 'none';
	  }
}
