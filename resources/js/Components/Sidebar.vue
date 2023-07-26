<script setup>
import {Link} from "@inertiajs/vue3";
import {Disclosure, DisclosureButton, DisclosurePanel} from '@headlessui/vue'
import {ChevronRightIcon, AdjustmentsHorizontalIcon, ServerStackIcon} from '@heroicons/vue/20/solid'
import {
    CalendarIcon,
    ChartPieIcon,
    DocumentDuplicateIcon,
    FolderIcon,
    HomeIcon,
    UserIcon,
    UsersIcon,
    UserCircleIcon,
    ArrowLeftOnRectangleIcon,
    DocumentTextIcon,
    InboxStackIcon,
    PresentationChartLineIcon
} from '@heroicons/vue/24/outline'
import {isSet} from "@vue/shared";
import DropdownLink from "@/Components/DropdownLink.vue";


let navigation =
    {
        main: [
            {name: 'Dashboard', href: '/', icon: HomeIcon, current: route().current('Dashboard'), route: 'Dashboard'},
            {name: 'Budgets', href: '/budgets', icon: PresentationChartLineIcon, current: route().current('Budgets'), route: 'Budgets'},
            {name: 'Dienstleister', href: '/contractors', icon: UserIcon, current: route().current('Contractors'), route: 'Contractors'},
            {name: 'Projekte', href: '/', icon: InboxStackIcon, current: route().current('Projects'), route: 'Projects'},
        ],
        admin: [
            {name: 'Benutzer', href: '/', icon: UsersIcon, current: route().current('Users')},
            {name: 'Audit Log', href: '/', icon: DocumentTextIcon, current: route().current('Audit')},
        ],
    }
</script>

<!--<template>-->
<!--    <div class="flex grow flex-col gap-y-5 overflow-y-auto border-r border-gray-200 bg-white px-6 w-full shadow-md z-40">-->
<!--        <div class="flex h-16 shrink-0 items-center">-->
<!--            &lt;!&ndash;            <img class="h-8 w-auto" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=600" alt="Your Company" />&ndash;&gt;-->
<!--            <h1 class="text-gray-900 w-full text-center font-bold text-2xl select-none">BUDJETTi</h1>-->
<!--        </div>-->
<!--        <nav class="flex flex-1 flex-col">-->
<!--            <ul role="list" class="flex flex-1 flex-col gap-y-7">-->
<!--                <li>-->
<!--                    <ul role="list" class="-mx-2 space-y-1">-->
<!--                        <li v-for="(item, index) in navigation" :key="item.name">-->
<!--                            <a v-if="!item.children" :href="item.href"-->
<!--                               :class="[item.current ? 'bg-gray-50' : 'hover:bg-gray-50', 'group flex gap-x-3 rounded-md p-2 text-sm leading-6 font-semibold text-gray-700']">-->
<!--                                <component :is="item.icon" class="h-6 w-6 shrink-0 text-gray-400" aria-hidden="true"/>-->
<!--                                {{ item.name }}-->
<!--                            </a>-->

<!--                            <Disclosure as="div" v-else v-slot="{ open }" defaultOpen>-->
<!--                                <DisclosureButton-->
<!--                                    :class="[item.current ? 'bg-gray-50' : 'hover:bg-gray-50', 'flex items-center w-full text-left rounded-md p-2 gap-x-3 text-sm leading-6 font-semibold text-gray-700']">-->
<!--                                    <component :is="item.icon" class="h-6 w-6 shrink-0 text-gray-400"-->
<!--                                               aria-hidden="true"/>-->
<!--                                    {{ item.name }}-->
<!--                                    <ChevronRightIcon-->
<!--                                        :class="[open ? 'rotate-90 text-gray-500' : 'text-gray-400', 'ml-auto h-5 w-5 shrink-0']"-->
<!--                                        aria-hidden="true"/>-->
<!--                                </DisclosureButton>-->
<!--                                <DisclosurePanel as="ul" class="mt-1 px-2">-->
<!--                                    <li v-for="subItem in item.children" :key="subItem.name">-->
<!--                                        &lt;!&ndash; 44px &ndash;&gt;-->
<!--                                        <DisclosureButton as="a" :href="subItem.href"-->
<!--                                                          :class="[subItem.current ? 'bg-gray-50' : 'hover:bg-gray-50', 'block rounded-md py-2 pr-2 pl-9 text-sm leading-6 text-gray-700']">-->
<!--                                            {{ subItem.name }}-->
<!--                                        </DisclosureButton>-->
<!--                                    </li>-->
<!--                                </DisclosurePanel>-->
<!--                            </Disclosure>-->
<!--                        </li>-->
<!--                    </ul>-->
<!--                </li>-->
<!--                <li class="-mx-6 mt-auto">-->
<!--                    <div class="w-full flex flex-col">-->
<!--                        <a href="/profile"-->
<!--                           class="flex items-center gap-x-4 px-6 py-3 text-sm font-semibold leading-6 text-gray-900 hover:bg-gray-50">-->
<!--                            <component :is="UserCircleIcon" class="h-10 w-10 shrink-0 text-gray-400"-->
<!--                                       aria-hidden="true"/>-->
<!--                            <span class="sr-only">Your profile</span>-->
<!--                            <span aria-hidden="true">Mein Profil</span>-->
<!--                        </a>-->

<!--                        <Link :href="route('logout')" method="post" class="flex items-center gap-x-4 px-6 py-3 text-sm font-semibold leading-6 text-gray-900 hover:bg-gray-50">-->
<!--                            <component :is="ArrowLeftOnRectangleIcon" class="h-10 w-10 shrink-0 text-gray-400"-->
<!--                                       aria-hidden="true"/>-->
<!--                            Abmelden-->
<!--                        </Link>-->
<!--                    </div>-->

<!--                </li>-->
<!--            </ul>-->
<!--        </nav>-->
<!--    </div>-->
<!--</template>-->


<template>
    <div class="flex grow flex-col gap-y-5 overflow-y-auto border-r border-gray-200 bg-white px-6 z-40">
        <div class="flex h-16 shrink-0 items-center">
            <h1 class="text-gray-900 w-full text-center font-bold text-2xl select-none">BUDJETTi</h1>
        </div>
        <nav class="flex flex-1 flex-col">
            <ul role="list" class="flex flex-1 flex-col gap-y-7">
                <li>
                    <ul role="list" class="-mx-2 space-y-1">
                        <li v-for="mainnav in navigation.main">
                            <!-- Current: "bg-gray-50 text-blue-600", Default: "text-gray-700 hover:text-blue-600 hover:bg-gray-50" -->
                            <Link :href="mainnav.href" :class="[route().current(mainnav.route) ? 'bg-gray-50 text-blue-600' : 'text-gray-700 hover:text-blue-600 hover:bg-gray-50', 'group flex gap-x-3 rounded-md py-2 px-6 text-sm leading-6 font-semibold']">
                                <component :is="mainnav.icon" :class="[route().current(mainnav.route) ? 'text-blue-600' : ' text-gray-400','h-6 w-6 shrink-0 group-hover:text-blue-600']" aria-hidden="true"/>
                                {{ mainnav.name }}
                            </Link>
                        </li>
                    </ul>
                </li>
                <li>
                    <div class="text-xs font-semibold leading-6 text-gray-400">Administration</div>
                    <ul role="list" class="-mx-2 mt-2 space-y-1">
                        <li v-for="adminnav in navigation.admin">
                            <Link :href="adminnav.href" :class="[adminnav.current ? 'bg-gray-50 text-blue-600' : 'text-gray-700 hover:text-blue-600 hover:bg-gray-50', 'group flex gap-x-3 rounded-md py-2 px-6 text-sm leading-6 font-semibold']">
                                <component :is="adminnav.icon" :class="[adminnav.current ? 'text-blue-600' : ' text-gray-400','h-6 w-6 shrink-0 group-hover:text-blue-600']" aria-hidden="true"/>
                                <span class="truncate">{{ adminnav.name }}</span>
                            </Link>
                        </li>
                    </ul>
                </li>
                <li class="-mx-6 mt-auto">
                    <div class="w-full flex flex-col gap-1">
                        <Link :href="route('profile.edit')"
                              :class="[route().current('profile.edit') ? 'bg-gray-50 text-blue-600' : 'text-gray-700 hover:text-blue-600 hover:bg-gray-50', 'group flex gap-x-3 rounded-md py-2 px-6 text-sm leading-6 font-semibold']">
                            <component :is="UserCircleIcon" :class="[route().current('profile.edit') ? 'text-blue-600' : ' text-gray-400','h-6 w-6 shrink-0 group-hover:text-blue-600']"
                                       aria-hidden="true"/>
                            <span class="sr-only">Mein Profil</span>
                            <span aria-hidden="true">Mein Profil</span>
                        </Link>

                        <Link :href="route('logout')" method="post" class="text-gray-700 hover:text-blue-600 hover:bg-gray-50 group flex gap-x-3 rounded-md py-2 px-6 text-sm leading-6 font-semibold mb-4">
                            <component :is="ArrowLeftOnRectangleIcon" class="text-gray-400 -6 w-6 shrink-0 group-hover:text-blue-600"
                                       aria-hidden="true"/>
                            Abmelden
                        </Link>
                    </div>
                </li>
            </ul>
        </nav>
    </div>

</template>

