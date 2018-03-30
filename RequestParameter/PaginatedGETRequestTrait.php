<?php
namespace SN\RequestParamBundle\RequestParameter;

use Symfony\Component\OptionsResolver\Options;
use Symfony\Component\OptionsResolver\OptionsResolver;


/**
 * Trait PaginatedGETRequestTrait
 *
 * @package SN\RequestParamBundle\RequestParameter
 */
trait PaginatedGETRequestTrait
{

    /**
     * @var integer
     */
    protected $page;

    /**
     * @var integer
     */
    protected $limit;

    /**
     * @param OptionsResolver $resolver
     * @param int $limitDefault
     * @param int $limitMax
     */
    protected function definePaginatedRequestOptions(OptionsResolver $resolver, $limitDefault = 25, $limitMax = null)
    {
        AbstractRequestParameter::addIntParam($resolver, 'page', true, true, 1);
        AbstractRequestParameter::addIntParam($resolver, 'limit', true, true, $limitDefault);

        if (is_numeric($limitMax)) {
            $resolver->setNormalizer(
                'limit',
                function (Options $options, $value) use ($limitDefault, $limitMax) {
                    $limit = abs(intval($value));

                    return $limit <= $limitMax ? $limit : $limitDefault;
                }
            );
        }
    }

    /**
     * @return int
     */
    public function getPage()
    {
        return $this->page;
    }

    /**
     * @param int $page
     */
    public function setPage($page)
    {
        $this->page = $page;
    }

    /**
     * @return int
     */
    public function getLimit()
    {
        return $this->limit;
    }

    /**
     * @param int $limit
     */
    public function setLimit($limit)
    {
        $this->limit = $limit;
    }

}
