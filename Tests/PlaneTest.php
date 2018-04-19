<?php

use PHPUnit\Framework\TestCase;

require 'Plane.php';

class PlaneTest extends TestCase {
  function testPlaneCanLandAtAnAirport() {
    $plane = New Plane;

    $this->assertEquals($plane->land(), true);
  }
}
