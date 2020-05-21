``filter``
==========

<<<<<<< Updated upstream
.. note::

    As of Twig 2.9, you should use the ``apply`` tag instead which does the
    same thing except that the wrapped template data is not scoped.

Filter sections allow you to apply regular Twig filters on a block of template
data. Just wrap the code in the special ``filter`` section:

.. code-block:: twig
=======
Filter sections allow you to apply regular Twig filters on a block of template
data. Just wrap the code in the special ``filter`` section:

.. code-block:: jinja
>>>>>>> Stashed changes

    {% filter upper %}
        This text becomes uppercase
    {% endfilter %}

<<<<<<< Updated upstream
You can also chain filters and pass arguments to them:

.. code-block:: twig

    {% filter lower|escape('html') %}
=======
You can also chain filters:

.. code-block:: jinja

    {% filter lower|escape %}
>>>>>>> Stashed changes
        <strong>SOME TEXT</strong>
    {% endfilter %}

    {# outputs "&lt;strong&gt;some text&lt;/strong&gt;" #}
