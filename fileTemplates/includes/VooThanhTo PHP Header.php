#if (${NAMESPACE})
    #set($count = 1)
    #set($str = "")
    #foreach( $str in $NAMESPACE.split("\\") )
        #if ($count == 1)
            #set($COMPANY = $str)
        #elseif ($count == 2)
            #set($MODULE = $str)
        #else
            #break
        #end
        #set($count = $count + 1)
    #end
#end
#set($companyName = "SMCommerce")
#set($author = "SMCommerce Core Team <connect@smartosc.com>")
#set($copyright = "Copyright SMCommerce (http://smartosc.com/)")
/**
#if(${companyName})
 * ${companyName}
 *
#end
#if(${COMPANY})
 * @category  ${COMPANY}
 * @package   ${COMPANY}_${MODULE}
 *
#end
 * Date: ${MONTH_NAME_FULL}, ${DAY} ${YEAR}
 * Time: ${TIME}
 * User: VooThanh DEV
#if(${author})
 *
 * @author    ${author}
#end
#if(${copyright})
 * @copyright ${copyright}
#end
*/