``empty``
=========

.. versionadded:: 2.3

    Support for the ``__toString()`` magic method has been added in Twig 2.3.

``empty`` checks if a variable is an empty string, an empty array, an empty
hash, exactly ``false``, or exactly ``null``:

.. code-block:: jinja

    {% if foo is empty %}
        ...
    {% endif %}
