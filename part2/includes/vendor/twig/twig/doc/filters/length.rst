``length``
==========

.. versionadded:: 2.3

    Support for the ``__toString()`` magic method has been added in Twig 2.3.

The ``length`` filter returns the number of items of a sequence or mapping, or
the length of a string:

.. code-block:: jinja

    {% if users|length > 10 %}
        ...
    {% endif %}
