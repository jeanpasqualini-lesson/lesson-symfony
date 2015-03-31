<?php

/* LessonFrontendBundle:Home:view.html.twig */
class __TwigTemplate_acb5e168f24a746e57b031e1e2f5dbd5d0b63ac6d3a7f7f4d404f601c6533289 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("::layout.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        // line 4
        echo "    <title ng-bind-template=\"Google phone ";
        echo "{{query}}";
        echo "\"></title>
";
    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        // line 7
        echo "    ";
        // line 73
        echo "
        <div ng-controller=\"PhoneListCtrl\">
            <div class=\"container\">
                <div class=\"col-xs-3\">
                    <div class=\"panel panel-default\">
                        <div class=\"panel-body\">
                            Search : <input ng-model=\"query\" class=\"form-control\">

                            Sort by :
                            <select ng-model=\"orderProp\" class=\"form-control\">
                                <option value=\"name\">Alphabet</option>
                                <option value=\"age\">Recent</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class=\"col-xs-9\">
                    <div class=\"panel panel-default\">
                        <div class=\"panel-heading\">
                            <form id=\"todo-form\" ng-submit=\"addTodo()\">
                                <input type=\"text\" class=\"form-control\" id=\"new-todo\" placeholder=\"Ajouter une tache\" ng-model=\"newTodo\" autofocus>
                            </form>
                        </div>
                        <div class=\"panel-body\">
                            <ul class=\"list-unstyled\">
                                <li ng-class=\"{editing: task == editedTask}\" ng-repeat=\"task in tasks | filter:query | orderBy:orderProp\">
                                    <div class=\"view\">
                                        <div class=\"row\">
                                            <div class=\"col-xs-1\">
                                                <input type=\"checkbox\" ng-model=\"task.enabled\">
                                            </div>
                                            <div class=\"col-xs-10\">
                                                <label ng-dblclick=\"editTodo(task)\">{{task.text}}</label>
                                            </div>
                                            <div class=\"col-xs-1\">
                                                <button type=\"button\" ng-click=\"removeTodo(task)\" class=\"btn btn-danger\">X</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"edit\">
                                        <form ng-submit=\"doneEditing(task)\">
                                            <input type=\"hidden\" name=\"id\" ng-value=\"task.id\"/>
                                            <input class=\"edit\" ng-trim=\"false\" ng-model=\"task.text\" ng-blur=\"doneEditing(task)\" todo-escape=\"revertEditing(task)\" todo-focus=\"task == editedTodo\" class=\"form-control\">
                                        </form>
                                    </div>

                                </li>
                            </ul>
                        </div>
                        <div class=\"panel-footer\">
                            <p>Total number of tasks: {{tasks.length}}</p>
                        </div>
                    </div>
                </div>

            </div>





        <div>


        </div>
        </div>
    ";
        echo "
";
    }

    public function getTemplateName()
    {
        return "LessonFrontendBundle:Home:view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 73,  50 => 7,  47 => 6,  40 => 4,  37 => 3,  11 => 1,);
    }
}
