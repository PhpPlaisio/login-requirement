<?php
//----------------------------------------------------------------------------------------------------------------------
namespace SetBased\Abc\Login;

/**
 * Interface for classes for validating a requirement to a login request.
 */
interface LoginRequirement
{
  //--------------------------------------------------------------------------------------------------------------------
  /**
   * Validates a requirement to a login request.
   *
   * @param array $data The data for validating the requirement to the login request. This method might enhance this
   *                    array with new elements.
   *
   * @return int
   */
  public function validate(&$data);

  //--------------------------------------------------------------------------------------------------------------------
}

//----------------------------------------------------------------------------------------------------------------------
