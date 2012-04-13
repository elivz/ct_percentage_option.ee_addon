<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Ct_percentage_option_ext
{
    public $settings = array();
    public $name = 'CartThrob Percentage Option';
    public $version = '1.0.0';
    public $description = 'Allows the creation of options that increase the price by a percent rather than a set amount.';
    public $settings_exist = 'n';
    public $docs_url = 'http://cartthrob.com/';
    
    /**
     * constructor
     * 
     * @access    public
     * @param     mixed $settings = ''
     * @return    void
     */
    public function __construct($settings = '')
    {
        $this->EE = get_instance();
        $this->settings = $settings;
    }
    
    /**
     * activate_extension
     * 
     * @access    public
     * @return    void
     */
    public function activate_extension()
    {
        $hook = array(
            'class' => __CLASS__,
            'settings' => '',
            'version' => $this->version,
            'enabled' => 'y',
            'priority' => 10,
            'method' => 'on_add_to_cart_end',
            'hook' => 'cartthrob_add_to_cart_end'
        );
        
        $this->EE->db->insert('extensions', $hook);
    }
    
    /**
     * update_extension
     * 
     * @access    public
     * @param    mixed $current = ''
     * @return    void
     */
    public function update_extension($current = '')
    {
        if ($current == '' OR $current == $this->version)
        {
            return FALSE;
        }
        
        $this->EE->db->update('extensions', array('version' => $this->version), array('class' => __CLASS__));
    }
    
    /**
     * disable_extension
     * 
     * @access    public
     * @return    void
     */
    public function disable_extension()
    {
        $this->EE->db->delete('extensions', array('class' => __CLASS__));
    }
    
    /**
     * settings
     * 
     * @access    public
     * @return    void
     */
    public function settings()
    {
        $settings = array();
        return $settings;
    }
    
    public function on_add_to_cart_end()
    {
        //var_dump($this->EE->cartthrob->cart->order());
    }
}

/* End of file ext.ct_percentage_option.php */
/* Location: ./system/expressionengine/third_party/ct_percentage_option/ext.ct_percentage_option.php */ 