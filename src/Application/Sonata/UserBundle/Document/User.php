<?php

namespace Application\Sonata\UserBundle\Document;

use Sonata\UserBundle\Document\BaseUser as BaseUser;

/**
 * This file has been generated by the EasyExtends bundle ( https://sonata-project.org/bundles/easy-extends ).
 *
 * References :
 *   working with object : http://www.doctrine-project.org/docs/mongodb_odm/1.0/en/reference/working-with-objects.html
 *
 * @author <yourname> <youremail>
 */
class User extends BaseUser
{
    /**
     * @var int
     */
    protected $id;

    /**
     * Get id.
     *
     * @return int $id
     */
    public function getId()
    {
        return $this->id;
    }
}
