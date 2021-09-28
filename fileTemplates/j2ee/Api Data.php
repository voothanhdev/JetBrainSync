<?php
#parse("VooThanhTo PHP Header.php")

namespace ${NAMESPACE};

class ${CLASS} extends \Magento\Framework\Api\AbstractExtensibleObject#if(${IMPLEMENT}) implements
    ${IMPLEMENT}#end
{
#if(${METHODS})
    #foreach( $key in $METHODS.split(",",-1) )
    #set( $fieldArr = $key.split(";", -1) )
    /**
    * @return ${fieldArr[1]}
    **/
    public function get${fieldArr[0]}()
    {
        return $this->_get(self::KEY_${fieldArr[2]});
    }

    /**
    * @param ${fieldArr[1]} $value
    *
    * @return $this
    **/
    public function set${fieldArr[0]}($value)
    {
        return $this->setData(self::KEY_${fieldArr[2]}, $value);
    }
    #end
#end
}
