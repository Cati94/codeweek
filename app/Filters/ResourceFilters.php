<?php

namespace App\Filters;

class ResourceFilters extends Filters
{
    /**
     * Registered filters to operate upon.
     *
     * @var array
     */
    protected $filters = ['name', 'selectedLevels','selectedTypes','selectedSubjects','selectedCategories','selectedLanguages','selectedProgrammingLanguages'];

    /**
     * Filter the query by name
     *
     * @param  string $name
     * @return \Illuminate\Database\Eloquent\Builder
     */
    protected function name($name)
    {
        $result = $this->builder->where('name', 'like', '%' . $name . '%');
        return $result;
    }

    /**
     * Filter the query by selectedLevels
     *
     * @param  string $selectedLevels
     * @return \Illuminate\Database\Eloquent\Builder
     */
    protected function selectedLevels($selectedLevels)
    {
        if (sizeof($selectedLevels) == 0) return;
        $plucked = collect($selectedLevels)->pluck("id");

        return $this->builder
            ->leftJoin('resource_item_resource_level', 'resource_items.id', "=", "resource_item_resource_level.resource_item_id")
            ->whereIn('resource_item_resource_level.resource_level_id', $plucked);

    }

    /**
     * Filter the query by selectedTypes
     *
     * @param  string $selectedTypes
     * @return \Illuminate\Database\Eloquent\Builder
     */
    protected function selectedTypes($selectedTypes)
    {
        if (sizeof($selectedTypes) == 0) return;
        $plucked = collect($selectedTypes)->pluck("id");

        return $this->builder
            ->leftJoin('resource_item_resource_type', 'resource_items.id', "=", "resource_item_resource_type.resource_item_id")
            ->whereIn('resource_item_resource_type.resource_type_id', $plucked);

    }

    /**
     * Filter the query by selectedSubjects
     *
     * @param  string $selectedSubjects
     * @return \Illuminate\Database\Eloquent\Builder
     */
    protected function selectedSubjects($selectedSubjects)
    {
        if (sizeof($selectedSubjects) == 0) return;
        $plucked = collect($selectedSubjects)->pluck("id");

        return $this->builder
            ->leftJoin('resource_item_resource_subject', 'resource_items.id', "=", "resource_item_resource_subject.resource_item_id")
            ->whereIn('resource_item_resource_subject.resource_subject_id', $plucked);

    }

    /**
     * Filter the query by selectedCategories
     *
     * @param  string $selectedCategories
     * @return \Illuminate\Database\Eloquent\Builder
     */
    protected function selectedCategories($selectedCategories)
    {
        if (sizeof($selectedCategories) == 0) return;
        $plucked = collect($selectedCategories)->pluck("id");

        return $this->builder
            ->leftJoin('resource_category_resource_item', 'resource_items.id', "=", "resource_category_resource_item.resource_item_id")
            ->whereIn('resource_category_resource_item.resource_category_id', $plucked);

    }


    /**
     * Filter the query by selectedLanguages
     *
     * @param  string $selectedLanguages
     * @return \Illuminate\Database\Eloquent\Builder
     */
    protected function selectedLanguages($selectedLanguages)
    {

        if (sizeof($selectedLanguages) == 0) return;
        $plucked = collect($selectedLanguages)->pluck("id");


        return $this->builder
            ->leftJoin('resource_item_resource_language', 'resource_items.id', "=", "resource_item_resource_language.resource_item_id")
            ->whereIn('resource_item_resource_language.resource_language_id', $plucked);

    }

    /**
     * Filter the query by selectedProgrammingLanguages
     *
     * @param  string $selectedProgrammingLanguages
     * @return \Illuminate\Database\Eloquent\Builder
     */
    protected function selectedProgrammingLanguages($selectedProgrammingLanguages)
    {
        if (sizeof($selectedProgrammingLanguages) == 0) return;
        $plucked = collect($selectedProgrammingLanguages)->pluck("id");


        return $this->builder
            ->leftJoin('res_pl_pivot', 'resource_items.id', "=", "res_pl_pivot.resource_item_id")
            ->whereIn('res_pl_pivot.resource_programming_language_id', $plucked);

    }


}