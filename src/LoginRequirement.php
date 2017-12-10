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
   * Validates a requirement to a login request and returns the ID of the login response.
   *
   * @param array $data The data for validating the requirement to the login request. This method is allowed to enhance
   *                    this array with new elements.
   *
   * @return int
   */
  public function validate(&$data);

  //--------------------------------------------------------------------------------------------------------------------
}

//----------------------------------------------------------------------------------------------------------------------
