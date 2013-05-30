
<?php echo $this->Form->create('User', array('class'=>'form-signin')); ?>
   <h2 class="form-signin-heading"><?php echo __('Acesso Restrito'); ?></h2>
   
 	  <?php echo $this->Session->flash(); ?> 

        
    <?php
        echo $this->Form->input('username', array(
                                                  'autofocus',
                                                  'required',
                                                  'placeholder'=>'Usuário',
                                                  'label'=>'',
                                                  'class'=>'input-block-level')
                                );
        echo $this->Form->input('password',array(
                                                'required',
                                                'placeholder'=>'Senha',
                                                'label'=>'',
                                                'class'=>'input-block-level')
                              );
        echo $this->Form->checkbox('remember_me', array('label'=>'Lembrar-me','class'=>'checkbox'));                   
     ?>
       <br/><br/>
<?php echo $this->Form->button(__('Login'),array('type'=>'submit','class'=>'btn btn-large btn-primary')); ?>
 




