<?php

/* core/themes/bartik/templates/comment.html.twig */
class __TwigTemplate_c45f6b5f2920396d121d92588bd1c233fb22aace9ee53fa77dc6df70506ca23e extends Twig_Template
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
        $tags = array("set" => 68, "if" => 95);
        $filters = array("without" => 77);
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('set', 'if'),
                array('without'),
                array()
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setTemplateFile($this->getTemplateName());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 68
        $context["classes"] = array(0 => "comment", 1 => "js-comment", 2 => (((        // line 71
(isset($context["status"]) ? $context["status"] : null) != "published")) ? (("comment--" . (isset($context["status"]) ? $context["status"] : null))) : ("")), 3 => (($this->getAttribute($this->getAttribute(        // line 72
(isset($context["comment"]) ? $context["comment"] : null), "owner", array()), "anonymous", array())) ? ("by-anonymous") : ("")), 4 => (((        // line 73
(isset($context["author_id"]) ? $context["author_id"] : null) && ((isset($context["author_id"]) ? $context["author_id"] : null) == $this->getAttribute((isset($context["commented_entity"]) ? $context["commented_entity"] : null), "getOwnerId", array(), "method")))) ? ((("by-" . $this->getAttribute((isset($context["commented_entity"]) ? $context["commented_entity"] : null), "getEntityTypeId", array(), "method")) . "-author")) : ("")), 5 => "clearfix");
        // line 77
        echo "<article role=\"article\"";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, twig_without($this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => (isset($context["classes"]) ? $context["classes"] : null)), "method"), "role"), "html", null, true));
        echo ">
  ";
        // line 83
        echo "  <span class=\"hidden\" data-comment-timestamp=\"";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["new_indicator_timestamp"]) ? $context["new_indicator_timestamp"] : null), "html", null, true));
        echo "\"></span>

  <footer class=\"comment__meta\">
    ";
        // line 86
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["user_picture"]) ? $context["user_picture"] : null), "html", null, true));
        echo "
    <p class=\"comment__author\">";
        // line 87
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["author"]) ? $context["author"] : null), "html", null, true));
        echo "</p>
    <p class=\"comment__time\">";
        // line 88
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["created"]) ? $context["created"] : null), "html", null, true));
        echo "</p>
    <p class=\"comment__permalink\">";
        // line 89
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["permalink"]) ? $context["permalink"] : null), "html", null, true));
        echo "</p>
    ";
        // line 95
        echo "    ";
        if ((isset($context["parent"]) ? $context["parent"] : null)) {
            // line 96
            echo "      <p class=\"visually-hidden\">";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["parent"]) ? $context["parent"] : null), "html", null, true));
            echo "</p>
    ";
        }
        // line 98
        echo "  </footer>

  <div";
        // line 100
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["content_attributes"]) ? $context["content_attributes"] : null), "addClass", array(0 => "comment__content"), "method"), "html", null, true));
        echo ">
    ";
        // line 101
        if ((isset($context["title"]) ? $context["title"] : null)) {
            // line 102
            echo "      ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title_prefix"]) ? $context["title_prefix"] : null), "html", null, true));
            echo "
      <h3";
            // line 103
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title_attributes"]) ? $context["title_attributes"] : null), "html", null, true));
            echo ">";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true));
            echo "</h3>
      ";
            // line 104
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title_suffix"]) ? $context["title_suffix"] : null), "html", null, true));
            echo "
    ";
        }
        // line 106
        echo "    ";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["content"]) ? $context["content"] : null), "html", null, true));
        echo "
  </div>
</article>
";
    }

    public function getTemplateName()
    {
        return "core/themes/bartik/templates/comment.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 106,  106 => 104,  100 => 103,  95 => 102,  93 => 101,  89 => 100,  85 => 98,  79 => 96,  76 => 95,  72 => 89,  68 => 88,  64 => 87,  60 => 86,  53 => 83,  48 => 77,  46 => 73,  45 => 72,  44 => 71,  43 => 68,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Bartik's theme implementation for comments.*/
/*  **/
/*  * Available variables:*/
/*  * - author: Comment author. Can be a link or plain text.*/
/*  * - content: The content-related items for the comment display. Use*/
/*  *   {{ content }} to print them all, or print a subset such as*/
/*  *   {{ content.field_example }}. Use the following code to temporarily suppress*/
/*  *   the printing of a given child element:*/
/*  *   @code*/
/*  *   {{ content|without('field_example') }}*/
/*  *   @endcode*/
/*  * - created: Formatted date and time for when the comment was created.*/
/*  *   Preprocess functions can reformat it by calling format_date() with the*/
/*  *   desired parameters on the 'comment.created' variable.*/
/*  * - changed: Formatted date and time for when the comment was last changed.*/
/*  *   Preprocess functions can reformat it by calling format_date() with the*/
/*  *   desired parameters on the 'comment.changed' variable.*/
/*  * - permalink: Comment permalink.*/
/*  * - submitted: Submission information created from author and created*/
/*  *   during template_preprocess_comment().*/
/*  * - user_picture: The comment author's profile picture.*/
/*  * - status: Comment status. Possible values are:*/
/*  *   unpublished, published, or preview.*/
/*  * - title: Comment title, linked to the comment.*/
/*  * - attributes: HTML attributes for the containing element.*/
/*  *   The attributes.class may contain one or more of the following classes:*/
/*  *   - comment: The current template type; e.g., 'theming hook'.*/
/*  *   - by-anonymous: Comment by an unregistered user.*/
/*  *   - by-{entity-type}-author: Comment by the author of the parent entity,*/
/*  *     eg. by-node-author.*/
/*  *   - preview: When previewing a new or edited comment.*/
/*  *   The following applies only to viewers who are registered users:*/
/*  *   - unpublished: An unpublished comment visible only to administrators.*/
/*  * - title_prefix: Additional output populated by modules, intended to be*/
/*  *   displayed in front of the main title tag that appears in the template.*/
/*  * - title_suffix: Additional output populated by modules, intended to be*/
/*  *   displayed after the main title tag that appears in the template.*/
/*  * - title_attributes: Same as attributes, except applied to the main title*/
/*  *   tag that appears in the template.*/
/*  * - content_attributes: List of classes for the styling of the comment content.*/
/*  * - threaded: A flag indicating whether the comments are threaded or not.*/
/*  **/
/*  * These variables are provided to give context about the parent comment (if*/
/*  * any):*/
/*  * - comment_parent: Full parent comment entity (if any).*/
/*  * - parent_author: Equivalent to author for the parent comment.*/
/*  * - parent_created: Equivalent to created for the parent comment.*/
/*  * - parent_changed: Equivalent to changed for the parent comment.*/
/*  * - parent_title: Equivalent to title for the parent comment.*/
/*  * - parent_permalink: Equivalent to permalink for the parent comment.*/
/*  * - parent: A text string of parent comment submission information created from*/
/*  *   'parent_author' and 'parent_created' during template_preprocess_comment().*/
/*  *   This information is presented to help screen readers follow lengthy*/
/*  *   discussion threads. You can hide this from sighted users using the class*/
/*  *   visually-hidden.*/
/*  **/
/*  * These two variables are provided for context:*/
/*  * - comment: Full comment object.*/
/*  * - entity: Entity the comments are attached to.*/
/*  **/
/*  * @see template_preprocess_comment()*/
/*  *//* */
/* #}*/
/* {%*/
/*   set classes = [*/
/*     'comment',*/
/*     'js-comment',*/
/*     status != 'published' ? 'comment--' ~ status,*/
/*     comment.owner.anonymous ? 'by-anonymous',*/
/*     author_id and author_id == commented_entity.getOwnerId() ? 'by-' ~ commented_entity.getEntityTypeId() ~ '-author',*/
/*     'clearfix',*/
/*   ]*/
/* %}*/
/* <article role="article"{{ attributes.addClass(classes)|without('role') }}>*/
/*   {#*/
/*     Hide the "new" indicator by default, let a piece of JavaScript ask the*/
/*     server which comments are new for the user. Rendering the final "new"*/
/*     indicator here would break the render cache.*/
/*   #}*/
/*   <span class="hidden" data-comment-timestamp="{{ new_indicator_timestamp }}"></span>*/
/* */
/*   <footer class="comment__meta">*/
/*     {{ user_picture }}*/
/*     <p class="comment__author">{{ author }}</p>*/
/*     <p class="comment__time">{{ created }}</p>*/
/*     <p class="comment__permalink">{{ permalink }}</p>*/
/*     {#*/
/*       Indicate the semantic relationship between parent and child comments*/
/*       for accessibility. The list is difficult to navigate in a screen*/
/*       reader without this information.*/
/*     #}*/
/*     {% if parent %}*/
/*       <p class="visually-hidden">{{ parent }}</p>*/
/*     {% endif %}*/
/*   </footer>*/
/* */
/*   <div{{ content_attributes.addClass('comment__content') }}>*/
/*     {% if title %}*/
/*       {{ title_prefix }}*/
/*       <h3{{ title_attributes }}>{{ title }}</h3>*/
/*       {{ title_suffix }}*/
/*     {% endif %}*/
/*     {{ content }}*/
/*   </div>*/
/* </article>*/
/* */
