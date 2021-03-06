<?php
if ( !class_exists( 'RepeaterField' ) ) { 
    require_once( plugin_dir_path( __FILE__ ) . '/BaseField.php' );
    require_once( plugin_dir_path( __FILE__ ) . '/../interfaces/iBaseField.php' );

    class RepeaterField extends BaseField implements iBaseField{

        public function getCode(){
            // get list of subfields
            $subfields = $this->field['sub_fields'];
            $returnText = '';

            $returnText .= $this->get_before_code() . "<?php if( have_rows( '$this->name' ) ): ?>\n<?php while ( have_rows( '$this->name' ) ) : the_row(); ?>";
            foreach( $subfields as $subfield ){
                $subfieldObj = new ACFTemplateCode( $subfield, true );
                $returnText .= $subfieldObj->get_code();
            }
            $returnText .= "\n<?php endwhile;?>\n<?php endif;?>
            " . $this->get_after_code();

            return $returnText;
        }
    }
}
