<?php

/* TestRegisterBundle:Object:add.html.twig */
class __TwigTemplate_ff105cde503b5c4e7a16893ed25a309337ff7b72731cae76c728cb7d6641e2ad extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "
<h3>Formulaire d'annonce</h3>


<div>

  ";
        // line 7
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "

</div>";
    }

    public function getTemplateName()
    {
        return "TestRegisterBundle:Object:add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 7,  19 => 1,);
    }
}
/* */
/* <h3>Formulaire d'annonce</h3>*/
/* */
/* */
/* <div>*/
/* */
/*   {{ form(form) }}*/
/* */
/* </div>*/
