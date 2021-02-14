<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'DCM') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Styles -->
    @livewireStyles
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.7.3/dist/alpine.js" defer></script>
</head>

<body class="bg-white">
    <x-header />
    <br><br><br>
    <div class="font-sans text-gray-900 antialiased">
        {{ $slot }}
    </div>
    <script>
        (function() {
            var templates = document.querySelectorAll('svg template');
            var el, template, attribs, attrib, count, child, content;
            for (var i = 0; i < templates.length; i++) {
                el = templates[i];
                template = el.ownerDocument.createElement('template');
                el.parentNode.insertBefore(template, el);
                attribs = el.attributes;
                count = attribs.length;
                while (count-- > 0) {
                    attrib = attribs[count];
                    template.setAttribute(attrib.name, attrib.value);
                    el.removeAttribute(attrib.name);
                }
                el.parentNode.removeChild(el);
                content = template.content;
                while ((child = el.firstChild)) {
                    content.appendChild(child);
                }
            }
        })();
        let val = 80;
        let sqr = document.querySelectorAll('.sqr');
        while (val > 0) {
            sqr.forEach(function(item) {
                item.innerHTML += "<div class='bg-gray-100 p-0 h-1 rounded w-1 animate-pulse'></div>"
                if (val % 2 == 0)
                    item.innerHTML += "<div class='bg-gray-500  p-0 rounded h-1 w-1 animate-bounce'></div>"
            });
            val--;
        }
    </script>
    <script>
        function tagSelect() {
            return {
                open: false,
                textInput: '',
                tags: [],
                init() {
                    this.tags = JSON.parse(this.$el.parentNode.getAttribute('data-tags'));
                },
                addTag(tag) {
                    tag = tag.trim()
                    if (tag.includes(",") && tag != "" && !this.hasTag(tag)) {
                        tag.split(",").forEach(function(val) {
                            this.tags.push(val)
                        }, this)
                    } else {
                        this.tags.push(tag)
                    }
                    this.clearSearch()
                    this.$refs.textInput.focus()
                    this.fireTagsUpdateEvent()
                },
                fireTagsUpdateEvent() {
                    this.$el.dispatchEvent(new CustomEvent('tags-update', {
                        detail: {
                            tags: this.tags
                        },
                        bubbles: true,
                    }));
                },
                hasTag(tag) {
                    var tag = this.tags.find(e => {
                        return e.toLowerCase() === tag.toLowerCase()
                    })
                    return tag != undefined
                },
                removeTag(index) {
                    this.tags.splice(index, 1)
                    this.fireTagsUpdateEvent()
                },
                search(q) {
                    this.toggleSearch()
                },
                clearSearch() {
                    this.textInput = ''
                    this.toggleSearch()
                },
                toggleSearch() {
                    this.open = this.textInput != ''
                }
            }
        }
    </script>
    @livewireScripts
</body>

</html>
