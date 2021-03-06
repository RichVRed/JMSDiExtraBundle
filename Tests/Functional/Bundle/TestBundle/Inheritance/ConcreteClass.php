<?php

/*
 * Copyright 2011 Johannes M. Schmitt <schmittjoh@gmail.com>
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

namespace JMS\DiExtraBundle\Tests\Functional\Bundle\TestBundle\Inheritance;

use JMS\DiExtraBundle\Annotation as DI;

/**
 * @DI\Service("concrete_class")
 *
 * @author Johannes M. Schmitt <schmittjoh@gmail.com>
 */
class ConcreteClass extends AbstractClass
{
    private $foo;
    private $bar;

    /**
     * @DI\InjectParams
     *
     * @param stdClass $foo
     * @param stdClass $bar
     */
    public function __construct($foo, $bar)
    {
        $this->foo = $foo;
        $this->bar = $bar;
    }

    public function getFoo()
    {
        return $this->foo;
    }

    public function getBar()
    {
        return $this->bar;
    }
}
