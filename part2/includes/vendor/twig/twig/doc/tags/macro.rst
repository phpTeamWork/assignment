``macro``
=========

Macros are comparable with functions in regular programming languages. They
are useful to put often used HTML idioms into reusable elements to not repeat
yourself.

Here is a small example of a macro that renders a form element:

.. code-block:: jinja

    {% macro input(name, value, type, size) %}
        <input type="{{ type|default('text') }}" name="{{ name }}" value="{{ value|e }}" size="{{ size|default(20) }}" />
    {% endmacro %}

Macros differ from native PHP functions in a few ways:

* Default argument values are defined by using the ``default`` filter in the
  macro body;

* Arguments of a macro are always optional.

* If extra positional arguments are passed to a macro, they end up in the
  special ``varargs`` variable as a list of values.

But as with PHP functions, macros don't have access to the current template
variables.

.. tip::

    You can pass the whole context as an argument by using the special
    ``_context`` variable.

Import
------

Macros can be defined in any template, and need to be "imported" before being
used (see the documentation for the :doc:`import<../tags/import>` tag for more
information):

.. code-block:: jinja

    {% import "forms.html" as forms %}

The above ``import`` call imports the "forms.html" file (which can contain only
macros, or a template and some macros), and import the functions as items of
the ``forms`` variable.

The macro can then be called at will:

.. code-block:: jinja

    <p>{{ forms.input('username') }}</p>
    <p>{{ forms.input('password', null, 'password') }}</p>

If macros are defined and used in the same template, you can use the
special ``_self`` variable to import them:

.. code-block:: jinja

    {% import _self as forms %}

<<<<<<< Updated upstream
        {% macro input(name, value, type = "text", size = 20) %}
            <input type="{{ type }}" name="{{ name }}" value="{{ value|e }}" size="{{ size }}" />
        {% endmacro %}

    Auto-import is only available as of Twig 2.11. For older versions, import
    macros using the special ``_self`` variable for the template name:

    .. code-block:: twig

        {% import _self as forms %}

        <p>{{ forms.input('username') }}</p>

.. note::

    Before Twig 2.11, when you want to use a macro in another macro from the
    same file, you need to import it locally:

    .. code-block:: twig

        {% macro input(name, value, type, size) %}
            <input type="{{ type|default('text') }}" name="{{ name }}" value="{{ value|e }}" size="{{ size|default(20) }}" />
        {% endmacro %}

        {% macro wrapped_input(name, value, type, size) %}
            {% import _self as forms %}

            <div class="field">
                {{ forms.input(name, value, type, size) }}
            </div>
        {% endmacro %}

Macros Scoping
--------------

.. versionadded:: 2.11

    The scoping rules described in this paragraph are implemented as of Twig
    2.11.

The scoping rules are the same whether you imported macros via ``import`` or
``from``.

Imported macros are always **local** to the current template. It means that
macros are available in all blocks and other macros defined in the current
template, but they are not available in included templates or child templates;
you need to explicitely re-import macros in each template.

When calling ``import`` or ``from`` from a ``block`` tag, the imported macros
are only defined in the current block and they override macros defined at the
template level with the same names.

When calling ``import`` or ``from`` from a ``macro`` tag, the imported macros
are only defined in the current macro and they override macros defined at the
template level with the same names.

.. note::

    Before Twig 2.11, it was possible to use macros imported in a block in a
    "sub-block". When upgrading to 2.11, you need to either move the import in
    the global scope or reimport the macros explicitly in the "sub-blocks".

Checking if a Macro is defined
------------------------------

.. versionadded:: 2.11

    Support for the ``defined`` test on macros was added in Twig 2.11.

You can check if a macro is defined via the ``defined`` test:
=======
    <p>{{ forms.input('username') }}</p>
>>>>>>> Stashed changes

When you want to use a macro in another macro from the same file, you need to
import it locally:

.. code-block:: jinja

    {% macro input(name, value, type, size) %}
        <input type="{{ type|default('text') }}" name="{{ name }}" value="{{ value|e }}" size="{{ size|default(20) }}" />
    {% endmacro %}

    {% macro wrapped_input(name, value, type, size) %}
        {% import _self as forms %}

        <div class="field">
            {{ forms.input(name, value, type, size) }}
        </div>
    {% endmacro %}

Named Macro End-Tags
--------------------

Twig allows you to put the name of the macro after the end tag for better
readability:

.. code-block:: jinja

    {% macro input() %}
        ...
    {% endmacro input %}

Of course, the name after the ``endmacro`` word must match the macro name.

.. seealso:: :doc:`from<../tags/from>`, :doc:`import<../tags/import>`
