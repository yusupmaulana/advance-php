<?php

namespace Symfony\Component\DependencyInjection;

trait ContainerAwareTrait
{
  protected $container;
  public function setContainer(ContainerInterface $container = null)
  {
    $this->container = $container;
  }
}



 ?>
